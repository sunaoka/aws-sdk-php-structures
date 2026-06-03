<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $flowId
 * @property string $flowName
 * @property string $flowStatus
 * @property list<'SIGN_UP'|'SIGN_IN'|'APPOINTMENT_BOOKING'|'LEAD_GENERATION'|'SHOPPING'|'CONTACT_US'|'CUSTOMER_SUPPORT'|'SURVEY'|'OTHER'> $flowCategories
 * @property list<string> $validationErrors
 */
class MetaFlowSummary extends Shape
{
    /**
     * @param array{
     *     flowId: string,
     *     flowName: string,
     *     flowStatus: string,
     *     flowCategories: list<'SIGN_UP'|'SIGN_IN'|'APPOINTMENT_BOOKING'|'LEAD_GENERATION'|'SHOPPING'|'CONTACT_US'|'CUSTOMER_SUPPORT'|'SURVEY'|'OTHER'>,
     *     validationErrors: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
