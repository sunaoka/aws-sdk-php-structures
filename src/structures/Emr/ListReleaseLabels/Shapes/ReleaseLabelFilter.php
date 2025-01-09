<?php

namespace Sunaoka\Aws\Structures\Emr\ListReleaseLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property string $Application
 */
class ReleaseLabelFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Application?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
