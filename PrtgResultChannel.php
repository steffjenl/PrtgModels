<?php
namespace App\Models;

class PrtgResultChannel
{
    /*
     * Tag: Channel
     * Mandatory: X
     * Possible Content: Any string
     * Description: Name of the channel as displayed in user interfaces. This parameter is required and must be unique for the sensor.
     */
    public $channel = '';
    
    /*
     * Tag: Value
     * Mandatory: X
     * Possible Content: Integer or float value
     * Description: The value as integer or float. Please make sure the <Float> setting matches the kind of value provided. Otherwise PRTG will show 0 values.
     */
    public $value = '';
    
    /*
     * Tag: Unit
     * Mandatory: -
     * Possible Content: BytesBandwidth,BytesMemory,BytesDisk,Temperature,Percent,TimeResponse,TimeSeconds,Custom,Count,CPU (*),BytesFile,SpeedDisk,SpeedNet,TimeHours
     * Description: The unit of the value. Default is Custom. Useful for PRTG to be able to convert volumes and times.
     */
    public $unit = null;
    
    /*
     * Tag: CustomUnit
     * Mandatory: -
     * Possible Content: Any string (keep it short)
     * Description: If Custom is used as unit this is the text displayed behind the value.
     */
    public $customunit = null;
    
    /*
     * Tag: SpeedSize
     * Mandatory: -
     * Possible Content: One,Kilo,Mega,Giga,Tera,Byte,KiloByte,MegaByte,GigaByte,TeraByte,Bit,KiloBit,MegaBit,GigaBit,TeraBit
     * Description: Size used for the display value. E.g. if you have a value of 50000 and use Kilo as size the display is 50 kilo #. Default is One (value used as returned). For the Bytes and Speed units this is overridden by the setting in the user interface.
     */
    public $speedsize = null;
    
    /*
     * Tag: VolumeSize
     * Mandatory: -
     * Possible Content: One,Kilo,Mega,Giga,Tera,Byte,KiloByte,MegaByte,GigaByte,TeraByte,Bit,KiloBit,MegaBit,GigaBit,TeraBit
     * Description: Size used for the display value. E.g. if you have a value of 50000 and use Kilo as size the display is 50 kilo #. Default is One (value used as returned). For the Bytes and Speed units this is overridden by the setting in the user interface.
     */
    public $volumesize = null;
    
    /*
     * Tag: SpeedTime
     * Mandatory: -
     * Possible Content: Second,Minute,Hour,Day
     * Description: See above, used when displaying the speed. Default is Second.
     */
    public $speedtime = null;
    
    /*
     * Tag: Mode
     * Mandatory: -
     * Possible Content: Absolute,Difference
     * Description: Selects if the value is a absolute value or counter. Default is Absolute.
     */
    public $mode = null;
    
    /*
     * Tag: Float
     * Mandatory: -
     * Possible Content: 0 (= no, integer, 1 (= yes, float)
     * Description: Define if the value is a float. Default is 0 (no). If set to 1 (yes), use a dot as decimal separator in values. Note: Define decimal places with the <DecimalMode> element.
     */
    public $float = null;
    
    /*
     * Tag: DecimalMode
     * Mandatory: -
     * Possible Content: Auto,All
     * Description: Init value for the Decimal Places option. If 0 is used in the <Float> element (i.e. use integer), the default is Auto; otherwise (i.e. for float) default is All. Note: You can change this initial setting later in the Channel settings of the sensor.
     */
    public $decimalmode = null;
    
    /*
     * Tag: Warning
     * Mandatory: -
     * Possible Content: 0 (= no), 1 (= yes)
     * Description: If enabled for at least one channel, the entire sensor is set to warning status. Default is 0 (no).
     */
    public $warning = null;
    
    /*
     * Tag: ShowChart
     * Mandatory: -
     * Possible Content: 0 (= no) 1 (= yes)
     * Description: Init value for the Show in Graph option. Default is 1 (yes). Note: The values defined with this element will be considered only on the first sensor scan, when the channel is newly created; they are ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $showchart = null;
    
    /*
     * Tag: ShowTable
     * Mandatory: -
     * Possible Content: 0 (= no) 1 (= yes)
     * Description: Init value for the Show in Table option. Default is 1 (yes). Note: The values defined with this element will be considered only on the first sensor scan, when the channel is newly created; they are ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $showtable = null;
    
    /*
     * Tag: LimitMaxError
     * Mandatory: -
     * Possible Content: Integer
     * Description: Define an upper error limit for the channel. If enabled, the sensor will be set to a "Down" status if this value is overrun and the LimitMode is activated. Note: Please provide the limit value in the unit of the base data type, just as used in the <Value> element of this section. While a sensor shows a "Down" status triggered by a limit, it will still receive data in its channels. The values defined with this element will be considered only on the first sensor scan, when the channel is newly created; they are ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $limitmaxerror = null;
    
    /*
     * Tag: LimitMaxWarning
     * Mandatory: -
     * Possible Content: Integer
     * Description: Define an upper warning limit for the channel. If enabled, the sensor will be set to a "Warning" status if this value is overrun and the LimitMode is activated. Note: Please provide the limit value in the unit of the base data type, just as used in the <Value> element of this section. The values defined with this element will be considered only on the first sensor scan, when the channel is newly created; they are ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $limitmaxwarning = null;
    
    /*
     * Tag: LimitMinWarning
     * Mandatory: -
     * Possible Content: Integer
     * Description: Define a lower warning limit for the channel. If enabled, the sensor will be set to a "Warning" status if this value is undercut and the LimitMode is activated. Note: Please provide the limit value in the unit of the base data type, just as used in the <Value> element of this section. The values defined with this element will be considered only on the first sensor scan, when the channel is newly created; they are ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $limitminwaring = null;
    
    /*
     * Tag: LimitMinError
     * Mandatory: -
     * Possible Content: Integer
     * Description: Define a lower error limit for the channel. If enabled, the sensor will be set to a "Down" status if this value is undercut and the LimitMode is activated. Note: Please provide the limit value in the unit of the base data type, just as used in the <Value> element of this section. While a sensor shows a "Down" status triggered by a limit, it will still receive data in its channels. The values defined with this element will be considered only on the first sensor scan, when the channel is newly created; they are ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $limitminerror = null;
    
    /*
     * Tag: LimitErrorMsg
     * Mandatory: -
     * Possible Content: Any string
     * Description: Define an additional message. It will be added to the sensor's message when entering a "Down" status that is triggered by a limit. Note: The values defined with this element will be considered only on the first sensor scan, when the channel is newly created; they are ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $limiterrormsg = null;
    
    /*
     * Tag: LimitWarningMsg
     * Mandatory: -
     * Possible Content: Any string
     * Description: Define an additional message. It will be added to the sensor's message when entering a "Warning" status that is triggered by a limit. Note: The values defined with this element will be considered only on the first sensor scan, when the channel is newly created; they are ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $limitwarningmsg = null;
    
    /*
     * Tag: LimitMode
     * Mandatory: -
     * Possible Content: 0 (= no), 1 (= yes)
     * Description: Define if the limit settings defined above will be active. Default is 0 (no; limits inactive). If 0 is used the limits will be written to the sensor channel settings as predefined values, but limits will be disabled. Note: This setting will be considered only on the first sensor scan, when the channel is newly created; it is ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $limitmode = null;
    
    /*
     * Tag: ValueLookup
     * Mandatory: -
     * Possible Content: Any string
     * Description: Define if you want to use a lookup file (e.g. to view integer values as status texts). Please enter the ID of the lookup file you want to use, or omit this element to not use lookups. Note: This setting will be considered only on the first sensor scan, when the channel is newly created; it is ignored on all further sensor scans (and may be omitted). You can change this initial setting later in the Channel settings of the sensor.
     */
    public $valuelookup = null;
    
    /*
     * Tag: NotifyChanged
     * Mandatory: -
     * Possible Content: No content required
     * Description: If a returned channel contains this tag, it will trigger a change notification that you can use with the Change Trigger to send a notification.
     */
    public $notifychanged = null;
    
    public function getChannel()
    {
        return $this->channel;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function getCustomunit()
    {
        return $this->customunit;
    }

    public function getSpeedsize()
    {
        return $this->speedsize;
    }

    public function getVolumesize()
    {
        return $this->volumesize;
    }

    public function getSpeedtime()
    {
        return $this->speedtime;
    }

    public function getMode()
    {
        return $this->mode;
    }

    public function getFloat()
    {
        return $this->float;
    }

    public function getDecimalmode()
    {
        return $this->decimalmode;
    }

    public function getWarning()
    {
        return $this->warning;
    }

    public function getShowchart()
    {
        return $this->showchart;
    }

    public function getShowtable()
    {
        return $this->showtable;
    }

    public function getLimitmaxerror()
    {
        return $this->limitmaxerror;
    }

    public function getLimitmaxwarning()
    {
        return $this->limitmaxwarning;
    }

    public function getLimitminwaring()
    {
        return $this->limitminwaring;
    }

    public function getLimitminerror()
    {
        return $this->limitminerror;
    }

    public function getLimiterrormsg()
    {
        return $this->limiterrormsg;
    }

    public function getLimitwarningmsg()
    {
        return $this->limitwarningmsg;
    }

    public function getLimitmode()
    {
        return $this->limitmode;
    }

    public function getValuelookup()
    {
        return $this->valuelookup;
    }

    public function getNotifychanged()
    {
        return $this->notifychanged;
    }

    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    public function setCustomunit($customunit)
    {
        $this->customunit = $customunit;
        return $this;
    }

    public function setSpeedsize($speedsize)
    {
        $this->speedsize = $speedsize;
        return $this;
    }

    public function setVolumesize($volumesize)
    {
        $this->volumesize = $volumesize;
        return $this;
    }

    public function setSpeedtime($speedtime)
    {
        $this->speedtime = $speedtime;
        return $this;
    }

    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    public function setFloat($float)
    {
        $this->float = $float;
        return $this;
    }

    public function setDecimalmode($decimalmode)
    {
        $this->decimalmode = $decimalmode;
        return $this;
    }

    public function setWarning($warning)
    {
        $this->warning = $warning;
        return $this;
    }

    public function setShowchart($showchart)
    {
        $this->showchart = $showchart;
        return $this;
    }

    public function setShowtable($showtable)
    {
        $this->showtable = $showtable;
        return $this;
    }

    public function setLimitmaxerror($limitmaxerror)
    {
        $this->limitmaxerror = $limitmaxerror;
        return $this;
    }

    public function setLimitmaxwarning($limitmaxwarning)
    {
        $this->limitmaxwarning = $limitmaxwarning;
        return $this;
    }

    public function setLimitminwaring($limitminwaring)
    {
        $this->limitminwaring = $limitminwaring;
        return $this;
    }

    public function setLimitminerror($limitminerror)
    {
        $this->limitminerror = $limitminerror;
        return $this;
    }

    public function setLimiterrormsg($limiterrormsg)
    {
        $this->limiterrormsg = $limiterrormsg;
        return $this;
    }

    public function setLimitwarningmsg($limitwarningmsg)
    {
        $this->limitwarningmsg = $limitwarningmsg;
        return $this;
    }

    public function setLimitmode($limitmode)
    {
        $this->limitmode = $limitmode;
        return $this;
    }

    public function setValuelookup($valuelookup)
    {
        $this->valuelookup = $valuelookup;
        return $this;
    }

    public function setNotifychanged($notifychanged)
    {
        $this->notifychanged = $notifychanged;
        return $this;
    }
    
    public function getResult()
    {
        $result = array_filter((array) $this, function ($value) {
            return ($value !== null && $value !== false && $value !== '');
        });
        
        return (object) $result;
    }
}
