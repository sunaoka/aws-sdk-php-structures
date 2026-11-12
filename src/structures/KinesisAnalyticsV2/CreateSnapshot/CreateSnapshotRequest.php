<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $SnapshotName
 * @property string|null $SnapshotDescription
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     SnapshotName: string,
     *     SnapshotDescription?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
