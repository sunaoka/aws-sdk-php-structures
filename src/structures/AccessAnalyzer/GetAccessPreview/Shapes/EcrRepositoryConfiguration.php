<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryPolicy
 */
class EcrRepositoryConfiguration extends Shape
{
    /**
     * @param array{repositoryPolicy?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
