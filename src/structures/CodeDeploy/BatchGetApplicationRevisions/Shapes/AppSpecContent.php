<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplicationRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $sha256
 */
class AppSpecContent extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     sha256?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
