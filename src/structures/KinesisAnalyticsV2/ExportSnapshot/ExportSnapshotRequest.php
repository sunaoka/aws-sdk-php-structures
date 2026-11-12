<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ExportSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotName
 * @property Shapes\ExportDestinationConfiguration $ExportDestinationConfiguration
 */
class ExportSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotName: string,
     *     ExportDestinationConfiguration: Shapes\ExportDestinationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
