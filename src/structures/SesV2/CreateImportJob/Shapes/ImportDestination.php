<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SuppressionListDestination|null $SuppressionListDestination
 * @property ContactListDestination|null $ContactListDestination
 */
class ImportDestination extends Shape
{
    /**
     * @param array{
     *     SuppressionListDestination?: SuppressionListDestination|null,
     *     ContactListDestination?: ContactListDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
