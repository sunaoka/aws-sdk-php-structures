<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CopyBackupToRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreateTimestamp
 * @property string|null $SourceRegion
 * @property string|null $SourceBackup
 * @property string|null $SourceCluster
 */
class DestinationBackup extends Shape
{
    /**
     * @param array{
     *     CreateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     SourceRegion?: string|null,
     *     SourceBackup?: string|null,
     *     SourceCluster?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
