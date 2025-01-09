<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelArn
 * @property string $Name
 * @property string $Source
 * @property list<Shapes\Destination> $Destinations
 * @property list<Shapes\Tag> $Tags
 */
class CreateChannelResponse extends Response
{
}
