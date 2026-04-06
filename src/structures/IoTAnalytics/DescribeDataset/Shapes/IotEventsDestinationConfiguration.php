<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputName
 * @property string $roleArn
 */
class IotEventsDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     inputName: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
