<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTI_CLASS'|'MULTI_LABEL' $Mode
 * @property list<string>|null $Labels
 */
class DocumentClassificationConfig extends Shape
{
    /**
     * @param array{
     *     Mode: 'MULTI_CLASS'|'MULTI_LABEL',
     *     Labels?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
