<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'shareSnapshot' $EventType
 * @property list<string> $SnapshotOwner
 * @property string $DescriptionRegex
 */
class EventParameters extends Shape
{
    /**
     * @param array{
     *     EventType: 'shareSnapshot',
     *     SnapshotOwner: list<string>,
     *     DescriptionRegex: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
