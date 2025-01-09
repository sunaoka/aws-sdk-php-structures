<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateContactChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $Name
 * @property 'SMS'|'VOICE'|'EMAIL' $Type
 * @property Shapes\ContactChannelAddress $DeliveryAddress
 * @property bool $DeferActivation
 * @property string $IdempotencyToken
 */
class CreateContactChannelRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     Name: string,
     *     Type: 'SMS'|'VOICE'|'EMAIL',
     *     DeliveryAddress: Shapes\ContactChannelAddress,
     *     DeferActivation?: bool,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
