<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointArn
 * @property 'CREATING'|'DELETING'|'FAILED'|'IN_SERVICE'|'UPDATING'|null $Status
 * @property string|null $Message
 * @property string|null $ModelArn
 * @property string|null $DesiredModelArn
 * @property int<1, max>|null $DesiredInferenceUnits
 * @property int<1, max>|null $CurrentInferenceUnits
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $DataAccessRoleArn
 * @property string|null $DesiredDataAccessRoleArn
 * @property string|null $FlywheelArn
 */
class EndpointProperties extends Shape
{
    /**
     * @param array{
     *     EndpointArn?: string|null,
     *     Status?: 'CREATING'|'DELETING'|'FAILED'|'IN_SERVICE'|'UPDATING'|null,
     *     Message?: string|null,
     *     ModelArn?: string|null,
     *     DesiredModelArn?: string|null,
     *     DesiredInferenceUnits?: int<1, max>|null,
     *     CurrentInferenceUnits?: int<1, max>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     DataAccessRoleArn?: string|null,
     *     DesiredDataAccessRoleArn?: string|null,
     *     FlywheelArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
