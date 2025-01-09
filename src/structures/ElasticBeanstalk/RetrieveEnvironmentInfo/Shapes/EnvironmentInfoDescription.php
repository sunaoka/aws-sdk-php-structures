<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RetrieveEnvironmentInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'tail'|'bundle' $InfoType
 * @property string $Ec2InstanceId
 * @property \Aws\Api\DateTimeResult $SampleTimestamp
 * @property string $Message
 */
class EnvironmentInfoDescription extends Shape
{
    /**
     * @param array{
     *     InfoType?: 'tail'|'bundle',
     *     Ec2InstanceId?: string,
     *     SampleTimestamp?: \Aws\Api\DateTimeResult,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
