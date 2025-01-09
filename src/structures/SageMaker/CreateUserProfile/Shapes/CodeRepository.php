<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryUrl
 */
class CodeRepository extends Shape
{
    /**
     * @param array{RepositoryUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
