<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCodeRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 */
class GitConfigForUpdate extends Shape
{
    /**
     * @param array{SecretArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
