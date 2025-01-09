<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespaceName
 * @property int $retentionPeriod
 * @property string $snapshotNamePrefix
 * @property list<Tag> $tags
 */
class CreateSnapshotScheduleActionParameters extends Shape
{
    /**
     * @param array{
     *     namespaceName: string,
     *     retentionPeriod?: int,
     *     snapshotNamePrefix: string,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
