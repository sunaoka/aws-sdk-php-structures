<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property array<string, string> $Attributes
 * @property string $DeviceId
 * @property bool $Enabled
 * @property double $RemainingLife
 * @property string $Type
 * @property array<string, string> $Tags
 */
class DeviceDescription extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Attributes?: array<string, string>,
     *     DeviceId?: string,
     *     Enabled?: bool,
     *     RemainingLife?: double,
     *     Type?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
