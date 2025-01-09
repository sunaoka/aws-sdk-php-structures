<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelArn
 * @property string $Name
 * @property string $Source
 * @property Shapes\SourceConfig $SourceConfig
 * @property list<Shapes\Destination> $Destinations
 * @property Shapes\IngestionStatus $IngestionStatus
 */
class GetChannelResponse extends Response
{
}
