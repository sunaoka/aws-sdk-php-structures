<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCardVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelCardName
 * @property string $ModelCardArn
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived' $ModelCardStatus
 * @property int $ModelCardVersion
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ModelCardVersionSummary extends Shape
{
    /**
     * @param array{
     *     ModelCardName: string,
     *     ModelCardArn: string,
     *     ModelCardStatus: 'Draft'|'PendingReview'|'Approved'|'Archived',
     *     ModelCardVersion: int,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
