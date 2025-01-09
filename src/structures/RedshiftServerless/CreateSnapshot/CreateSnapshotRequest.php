<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $namespaceName
 * @property int $retentionPeriod
 * @property string $snapshotName
 * @property list<Shapes\Tag> $tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     namespaceName: string,
     *     retentionPeriod?: int,
     *     snapshotName: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
