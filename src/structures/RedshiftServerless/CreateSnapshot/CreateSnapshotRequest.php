<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $namespaceName
 * @property int|null $retentionPeriod
 * @property string $snapshotName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     namespaceName: string,
     *     retentionPeriod?: int|null,
     *     snapshotName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
