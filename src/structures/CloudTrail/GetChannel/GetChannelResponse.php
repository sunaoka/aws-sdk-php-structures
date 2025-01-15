<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChannelArn
 * @property string|null $Name
 * @property string|null $Source
 * @property Shapes\SourceConfig|null $SourceConfig
 * @property list<Shapes\Destination>|null $Destinations
 * @property Shapes\IngestionStatus|null $IngestionStatus
 */
class GetChannelResponse extends Response
{
}
