<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SuppressionListDestination $SuppressionListDestination
 * @property ContactListDestination $ContactListDestination
 */
class ImportDestination extends Shape
{
    /**
     * @param array{
     *     SuppressionListDestination?: SuppressionListDestination,
     *     ContactListDestination?: ContactListDestination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
