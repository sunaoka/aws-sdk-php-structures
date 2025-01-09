<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODESTAR' $Type
 * @property SourceConnectionParameters $ConnectionParameters
 */
class SourceConnection extends Shape
{
    /**
     * @param array{
     *     Type?: 'CODESTAR',
     *     ConnectionParameters: SourceConnectionParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
