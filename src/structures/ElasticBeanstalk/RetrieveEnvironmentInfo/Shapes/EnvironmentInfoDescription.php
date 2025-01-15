<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RetrieveEnvironmentInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'tail'|'bundle'|null $InfoType
 * @property string|null $Ec2InstanceId
 * @property \Aws\Api\DateTimeResult|null $SampleTimestamp
 * @property string|null $Message
 */
class EnvironmentInfoDescription extends Shape
{
    /**
     * @param array{
     *     InfoType?: 'tail'|'bundle'|null,
     *     Ec2InstanceId?: string|null,
     *     SampleTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
