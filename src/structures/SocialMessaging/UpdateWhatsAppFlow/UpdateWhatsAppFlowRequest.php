<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateWhatsAppFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $flowId
 * @property string|null $flowName
 * @property list<'SIGN_UP'|'SIGN_IN'|'APPOINTMENT_BOOKING'|'LEAD_GENERATION'|'SHOPPING'|'CONTACT_US'|'CUSTOMER_SUPPORT'|'SURVEY'|'OTHER'>|null $categories
 */
class UpdateWhatsAppFlowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     flowId: string,
     *     flowName?: string|null,
     *     categories?: list<'SIGN_UP'|'SIGN_IN'|'APPOINTMENT_BOOKING'|'LEAD_GENERATION'|'SHOPPING'|'CONTACT_US'|'CUSTOMER_SUPPORT'|'SURVEY'|'OTHER'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
