<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property string $DeviceType
 */
class AwsEcsTaskDefinitionInferenceAcceleratorsDetails extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     DeviceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
