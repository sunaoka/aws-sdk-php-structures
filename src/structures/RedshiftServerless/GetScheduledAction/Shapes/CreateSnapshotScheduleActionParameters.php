<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespaceName
 * @property int|null $retentionPeriod
 * @property string $snapshotNamePrefix
 * @property list<Tag>|null $tags
 */
class CreateSnapshotScheduleActionParameters extends Shape
{
    /**
     * @param array{
     *     namespaceName: string,
     *     retentionPeriod?: int|null,
     *     snapshotNamePrefix: string,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
