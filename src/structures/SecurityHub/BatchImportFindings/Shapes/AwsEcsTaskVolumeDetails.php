<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property AwsEcsTaskVolumeHostDetails|null $Host
 */
class AwsEcsTaskVolumeDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Host?: AwsEcsTaskVolumeHostDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
