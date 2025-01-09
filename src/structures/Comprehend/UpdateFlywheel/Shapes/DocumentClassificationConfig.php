<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTI_CLASS'|'MULTI_LABEL' $Mode
 * @property list<string> $Labels
 */
class DocumentClassificationConfig extends Shape
{
    /**
     * @param array{
     *     Mode: 'MULTI_CLASS'|'MULTI_LABEL',
     *     Labels?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
