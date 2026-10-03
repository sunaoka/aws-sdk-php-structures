<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TARGET_BRANCH'|'LABEL' $type
 * @property list<string> $patterns
 * @property 'INCLUDE'|'EXCLUDE'|null $matchMode
 */
class TriggerFilter extends Shape
{
    /**
     * @param array{
     *     type: 'TARGET_BRANCH'|'LABEL',
     *     patterns: list<string>,
     *     matchMode?: 'INCLUDE'|'EXCLUDE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
