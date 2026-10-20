<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PrepareMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretArn
 */
class SecretManagerAuthConfig extends Shape
{
    /**
     * @param array{SecretArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
