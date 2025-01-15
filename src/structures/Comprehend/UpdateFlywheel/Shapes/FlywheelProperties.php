<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlywheelArn
 * @property string|null $ActiveModelArn
 * @property string|null $DataAccessRoleArn
 * @property TaskConfig|null $TaskConfig
 * @property string|null $DataLakeS3Uri
 * @property DataSecurityConfig|null $DataSecurityConfig
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|null $Status
 * @property 'DOCUMENT_CLASSIFIER'|'ENTITY_RECOGNIZER'|null $ModelType
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LatestFlywheelIteration
 */
class FlywheelProperties extends Shape
{
    /**
     * @param array{
     *     FlywheelArn?: string|null,
     *     ActiveModelArn?: string|null,
     *     DataAccessRoleArn?: string|null,
     *     TaskConfig?: TaskConfig|null,
     *     DataLakeS3Uri?: string|null,
     *     DataSecurityConfig?: DataSecurityConfig|null,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|null,
     *     ModelType?: 'DOCUMENT_CLASSIFIER'|'ENTITY_RECOGNIZER'|null,
     *     Message?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LatestFlywheelIteration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
