<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Platform'|'Vpc' $RepositoryAccessMode
 * @property RepositoryAuthConfig|null $RepositoryAuthConfig
 */
class ImageConfig extends Shape
{
    /**
     * @param array{
     *     RepositoryAccessMode: 'Platform'|'Vpc',
     *     RepositoryAuthConfig?: RepositoryAuthConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
