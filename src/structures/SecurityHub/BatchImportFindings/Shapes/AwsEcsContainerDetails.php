<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Image
 * @property list<AwsMountPoint> $MountPoints
 * @property bool $Privileged
 */
class AwsEcsContainerDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Image?: string,
     *     MountPoints?: list<AwsMountPoint>,
     *     Privileged?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
