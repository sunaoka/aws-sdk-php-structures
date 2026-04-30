<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MANUAL'|'SCHEDULED'|'WORKFLOW'|null $type
 * @property string|null $name
 */
class TriggerSource extends Shape
{
    /**
     * @param array{
     *     type?: 'MANUAL'|'SCHEDULED'|'WORKFLOW'|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
