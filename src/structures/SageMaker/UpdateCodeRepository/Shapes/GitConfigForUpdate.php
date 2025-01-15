<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCodeRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretArn
 */
class GitConfigForUpdate extends Shape
{
    /**
     * @param array{SecretArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
