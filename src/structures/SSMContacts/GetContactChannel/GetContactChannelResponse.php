<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContactChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ContactArn
 * @property string $ContactChannelArn
 * @property string $Name
 * @property 'SMS'|'VOICE'|'EMAIL' $Type
 * @property Shapes\ContactChannelAddress $DeliveryAddress
 * @property 'ACTIVATED'|'NOT_ACTIVATED' $ActivationStatus
 */
class GetContactChannelResponse extends Response
{
}
