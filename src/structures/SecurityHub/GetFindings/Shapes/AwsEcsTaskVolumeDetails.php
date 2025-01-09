<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property AwsEcsTaskVolumeHostDetails $Host
 */
class AwsEcsTaskVolumeDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Host?: AwsEcsTaskVolumeHostDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
