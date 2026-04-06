<?php

namespace Sunaoka\Aws\Structures\Efs\CreateReplicationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SourceFileSystemId
 * @property string $SourceFileSystemRegion
 * @property string $SourceFileSystemArn
 * @property string $OriginalSourceFileSystemArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Shapes\Destination> $Destinations
 */
class CreateReplicationConfigurationResponse extends Response
{
}
