<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PrepareMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretManagerAuthConfig|null $SecretManagerConfig
 */
class SourceAuthenticationConfiguration extends Shape
{
    /**
     * @param array{SecretManagerConfig?: SecretManagerAuthConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
