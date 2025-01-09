<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Platform'|'Vpc' $RepositoryAccessMode
 * @property RepositoryAuthConfig $RepositoryAuthConfig
 */
class ImageConfig extends Shape
{
    /**
     * @param array{
     *     RepositoryAccessMode: 'Platform'|'Vpc',
     *     RepositoryAuthConfig?: RepositoryAuthConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
