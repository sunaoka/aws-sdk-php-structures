<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplicationSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $SnapshotName
 */
class CreateApplicationSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     SnapshotName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
