<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODESTAR'|null $Type
 * @property SourceConnectionParameters $ConnectionParameters
 */
class SourceConnection extends Shape
{
    /**
     * @param array{
     *     Type?: 'CODESTAR'|null,
     *     ConnectionParameters: SourceConnectionParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
