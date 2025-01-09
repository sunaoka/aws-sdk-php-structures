<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroupName
 */
class EgressAccessLogs extends Shape
{
    /**
     * @param array{LogGroupName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
