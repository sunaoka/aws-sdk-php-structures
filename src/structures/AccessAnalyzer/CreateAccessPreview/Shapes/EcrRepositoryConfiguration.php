<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryPolicy
 */
class EcrRepositoryConfiguration extends Shape
{
    /**
     * @param array{repositoryPolicy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
