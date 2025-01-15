<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property string|null $DeviceType
 */
class AwsEcsTaskDefinitionInferenceAcceleratorsDetails extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     DeviceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
