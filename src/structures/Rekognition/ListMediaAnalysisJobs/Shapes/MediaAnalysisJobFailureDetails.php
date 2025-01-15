<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListMediaAnalysisJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR'|'INVALID_S3_OBJECT'|'INVALID_MANIFEST'|'INVALID_OUTPUT_CONFIG'|'INVALID_KMS_KEY'|'ACCESS_DENIED'|'RESOURCE_NOT_FOUND'|'RESOURCE_NOT_READY'|'THROTTLED'|null $Code
 * @property string|null $Message
 */
class MediaAnalysisJobFailureDetails extends Shape
{
    /**
     * @param array{
     *     Code?: 'INTERNAL_ERROR'|'INVALID_S3_OBJECT'|'INVALID_MANIFEST'|'INVALID_OUTPUT_CONFIG'|'INVALID_KMS_KEY'|'ACCESS_DENIED'|'RESOURCE_NOT_FOUND'|'RESOURCE_NOT_READY'|'THROTTLED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
