<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $flowName
 * @property list<'SIGN_UP'|'SIGN_IN'|'APPOINTMENT_BOOKING'|'LEAD_GENERATION'|'SHOPPING'|'CONTACT_US'|'CUSTOMER_SUPPORT'|'SURVEY'|'OTHER'> $categories
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $flowJson
 * @property bool|null $publish
 * @property string|null $cloneFlowId
 */
class CreateWhatsAppFlowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     flowName: string,
     *     categories: list<'SIGN_UP'|'SIGN_IN'|'APPOINTMENT_BOOKING'|'LEAD_GENERATION'|'SHOPPING'|'CONTACT_US'|'CUSTOMER_SUPPORT'|'SURVEY'|'OTHER'>,
     *     flowJson?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     publish?: bool|null,
     *     cloneFlowId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
