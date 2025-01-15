<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeReplicationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceFileSystemId
 * @property string $SourceFileSystemRegion
 * @property string $SourceFileSystemArn
 * @property string $OriginalSourceFileSystemArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Destination> $Destinations
 * @property string|null $SourceFileSystemOwnerId
 */
class ReplicationConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     SourceFileSystemId: string,
     *     SourceFileSystemRegion: string,
     *     SourceFileSystemArn: string,
     *     OriginalSourceFileSystemArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     Destinations: list<Destination>,
     *     SourceFileSystemOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
