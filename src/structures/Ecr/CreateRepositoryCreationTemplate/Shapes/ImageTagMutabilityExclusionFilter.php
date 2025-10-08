<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepositoryCreationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WILDCARD' $filterType
 * @property string $filter
 */
class ImageTagMutabilityExclusionFilter extends Shape
{
    /**
     * @param array{
     *     filterType: 'WILDCARD',
     *     filter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
