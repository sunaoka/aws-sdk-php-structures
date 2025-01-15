<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChannelArn
 * @property string|null $Name
 * @property string|null $Source
 * @property list<Shapes\Destination>|null $Destinations
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateChannelResponse extends Response
{
}
