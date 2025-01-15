<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogGroupName
 */
class EgressAccessLogs extends Shape
{
    /**
     * @param array{LogGroupName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
