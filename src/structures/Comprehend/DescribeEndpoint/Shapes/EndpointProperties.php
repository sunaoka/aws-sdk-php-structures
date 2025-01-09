<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointArn
 * @property 'CREATING'|'DELETING'|'FAILED'|'IN_SERVICE'|'UPDATING' $Status
 * @property string $Message
 * @property string $ModelArn
 * @property string $DesiredModelArn
 * @property int $DesiredInferenceUnits
 * @property int $CurrentInferenceUnits
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $DataAccessRoleArn
 * @property string $DesiredDataAccessRoleArn
 * @property string $FlywheelArn
 */
class EndpointProperties extends Shape
{
    /**
     * @param array{
     *     EndpointArn?: string,
     *     Status?: 'CREATING'|'DELETING'|'FAILED'|'IN_SERVICE'|'UPDATING',
     *     Message?: string,
     *     ModelArn?: string,
     *     DesiredModelArn?: string,
     *     DesiredInferenceUnits?: int,
     *     CurrentInferenceUnits?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     DataAccessRoleArn?: string,
     *     DesiredDataAccessRoleArn?: string,
     *     FlywheelArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
