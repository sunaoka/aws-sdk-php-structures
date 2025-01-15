<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListApplicationRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property string|null $sha256
 */
class RawString extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     sha256?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
