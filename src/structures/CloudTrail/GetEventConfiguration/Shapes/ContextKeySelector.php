<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TagContext'|'RequestContext' $Type
 * @property list<string> $Equals
 */
class ContextKeySelector extends Shape
{
    /**
     * @param array{
     *     Type: 'TagContext'|'RequestContext',
     *     Equals: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
