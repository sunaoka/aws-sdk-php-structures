<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CopyBackupToRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 * @property string $SourceRegion
 * @property string $SourceBackup
 * @property string $SourceCluster
 */
class DestinationBackup extends Shape
{
    /**
     * @param array{
     *     CreateTimestamp?: \Aws\Api\DateTimeResult,
     *     SourceRegion?: string,
     *     SourceBackup?: string,
     *     SourceCluster?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
