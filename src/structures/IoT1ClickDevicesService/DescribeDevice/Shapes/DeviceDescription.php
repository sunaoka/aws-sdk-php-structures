<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property array<string, string>|null $Attributes
 * @property string|null $DeviceId
 * @property bool|null $Enabled
 * @property double|null $RemainingLife
 * @property string|null $Type
 * @property array<string, string>|null $Tags
 */
class DeviceDescription extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Attributes?: array<string, string>|null,
     *     DeviceId?: string|null,
     *     Enabled?: bool|null,
     *     RemainingLife?: double|null,
     *     Type?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
