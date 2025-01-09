<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlywheelArn
 * @property string $ActiveModelArn
 * @property string $DataAccessRoleArn
 * @property TaskConfig $TaskConfig
 * @property string $DataLakeS3Uri
 * @property DataSecurityConfig $DataSecurityConfig
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $Status
 * @property 'DOCUMENT_CLASSIFIER'|'ENTITY_RECOGNIZER' $ModelType
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LatestFlywheelIteration
 */
class FlywheelProperties extends Shape
{
    /**
     * @param array{
     *     FlywheelArn?: string,
     *     ActiveModelArn?: string,
     *     DataAccessRoleArn?: string,
     *     TaskConfig?: TaskConfig,
     *     DataLakeS3Uri?: string,
     *     DataSecurityConfig?: DataSecurityConfig,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     ModelType?: 'DOCUMENT_CLASSIFIER'|'ENTITY_RECOGNIZER',
     *     Message?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LatestFlywheelIteration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
