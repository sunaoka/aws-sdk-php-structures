<?php

namespace Sunaoka\Aws\Structures\Ecr\GetRegistryScanningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filter
 * @property 'WILDCARD' $filterType
 */
class ScanningRepositoryFilter extends Shape
{
    /**
     * @param array{
     *     filter: string,
     *     filterType: 'WILDCARD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
