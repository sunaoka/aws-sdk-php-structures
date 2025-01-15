<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Image
 * @property list<AwsMountPoint>|null $MountPoints
 * @property bool|null $Privileged
 */
class AwsEcsContainerDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Image?: string|null,
     *     MountPoints?: list<AwsMountPoint>|null,
     *     Privileged?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
