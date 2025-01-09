<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ANALYSIS'|'INCIDENT'|'METRIC'|'PARENT'|'ATTACHMENT'|'OTHER'|'AUTOMATION'|'INVOLVED_RESOURCE'|'TASK' $type
 * @property ItemValue $value
 */
class ItemIdentifier extends Shape
{
    /**
     * @param array{
     *     type: 'ANALYSIS'|'INCIDENT'|'METRIC'|'PARENT'|'ATTACHMENT'|'OTHER'|'AUTOMATION'|'INVOLVED_RESOURCE'|'TASK',
     *     value: ItemValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
