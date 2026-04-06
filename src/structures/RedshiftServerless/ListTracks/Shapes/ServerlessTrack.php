<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListTracks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $trackName
 * @property list<UpdateTarget>|null $updateTargets
 * @property string|null $workgroupVersion
 */
class ServerlessTrack extends Shape
{
    /**
     * @param array{
     *     trackName?: string|null,
     *     updateTargets?: list<UpdateTarget>|null,
     *     workgroupVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
