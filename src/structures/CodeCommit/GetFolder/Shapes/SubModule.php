<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $commitId
 * @property string $absolutePath
 * @property string $relativePath
 */
class SubModule extends Shape
{
    /**
     * @param array{
     *     commitId?: string,
     *     absolutePath?: string,
     *     relativePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
