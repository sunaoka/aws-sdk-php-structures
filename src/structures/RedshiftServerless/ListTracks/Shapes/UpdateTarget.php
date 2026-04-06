<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListTracks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $trackName
 * @property string|null $workgroupVersion
 */
class UpdateTarget extends Shape
{
    /**
     * @param array{
     *     trackName?: string|null,
     *     workgroupVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
