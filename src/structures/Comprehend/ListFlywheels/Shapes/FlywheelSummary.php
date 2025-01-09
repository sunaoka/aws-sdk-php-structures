<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlywheelArn
 * @property string $ActiveModelArn
 * @property string $DataLakeS3Uri
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $Status
 * @property 'DOCUMENT_CLASSIFIER'|'ENTITY_RECOGNIZER' $ModelType
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LatestFlywheelIteration
 */
class FlywheelSummary extends Shape
{
    /**
     * @param array{
     *     FlywheelArn?: string,
     *     ActiveModelArn?: string,
     *     DataLakeS3Uri?: string,
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
