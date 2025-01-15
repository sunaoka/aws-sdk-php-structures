<?php

namespace Sunaoka\Aws\Structures\Emr\ListReleaseLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property string|null $Application
 */
class ReleaseLabelFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Application?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
