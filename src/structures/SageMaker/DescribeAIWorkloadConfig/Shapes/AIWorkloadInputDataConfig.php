<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIWorkloadConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelName
 * @property AIWorkloadDataSource $DataSource
 */
class AIWorkloadInputDataConfig extends Shape
{
    /**
     * @param array{
     *     ChannelName: string,
     *     DataSource: AIWorkloadDataSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
