<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $commitId
 * @property string|null $absolutePath
 * @property string|null $relativePath
 */
class SubModule extends Shape
{
    /**
     * @param array{
     *     commitId?: string|null,
     *     absolutePath?: string|null,
     *     relativePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
