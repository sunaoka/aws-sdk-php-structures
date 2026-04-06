<?php

namespace Sunaoka\Aws\Structures\Ecr\GetSigningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filter
 * @property 'WILDCARD_MATCH' $filterType
 */
class SigningRepositoryFilter extends Shape
{
    /**
     * @param array{
     *     filter: string,
     *     filterType: 'WILDCARD_MATCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
