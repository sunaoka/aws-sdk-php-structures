<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODESTAR'|null $Type
 * @property SourceConnectionParameters|null $ConnectionParameters
 * @property LastSync|null $LastSync
 */
class SourceConnectionDetail extends Shape
{
    /**
     * @param array{
     *     Type?: 'CODESTAR'|null,
     *     ConnectionParameters?: SourceConnectionParameters|null,
     *     LastSync?: LastSync|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
