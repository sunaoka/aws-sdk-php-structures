<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProductsAsAdmin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODESTAR' $Type
 * @property SourceConnectionParameters $ConnectionParameters
 * @property LastSync $LastSync
 */
class SourceConnectionDetail extends Shape
{
    /**
     * @param array{
     *     Type?: 'CODESTAR',
     *     ConnectionParameters?: SourceConnectionParameters,
     *     LastSync?: LastSync
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
