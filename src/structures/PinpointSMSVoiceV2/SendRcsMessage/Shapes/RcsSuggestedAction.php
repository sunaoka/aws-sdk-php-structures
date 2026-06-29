<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RcsReplyAction|null $Reply
 * @property RcsOpenUrlAction|null $OpenUrl
 * @property RcsDialPhoneAction|null $DialPhone
 * @property RcsShowLocationAction|null $ShowLocation
 * @property RcsRequestLocationAction|null $RequestLocation
 * @property RcsCreateCalendarEventAction|null $CreateCalendarEvent
 */
class RcsSuggestedAction extends Shape
{
    /**
     * @param array{
     *     Reply?: RcsReplyAction|null,
     *     OpenUrl?: RcsOpenUrlAction|null,
     *     DialPhone?: RcsDialPhoneAction|null,
     *     ShowLocation?: RcsShowLocationAction|null,
     *     RequestLocation?: RcsRequestLocationAction|null,
     *     CreateCalendarEvent?: RcsCreateCalendarEventAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
