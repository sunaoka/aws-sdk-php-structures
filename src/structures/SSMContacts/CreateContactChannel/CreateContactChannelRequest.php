<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateContactChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $Name
 * @property 'SMS'|'VOICE'|'EMAIL' $Type
 * @property Shapes\ContactChannelAddress $DeliveryAddress
 * @property bool|null $DeferActivation
 * @property string|null $IdempotencyToken
 */
class CreateContactChannelRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     Name: string,
     *     Type: 'SMS'|'VOICE'|'EMAIL',
     *     DeliveryAddress: Shapes\ContactChannelAddress,
     *     DeferActivation?: bool|null,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
