<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $datasetGroupArn
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND' $domain
 */
class DatasetGroupSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     datasetGroupArn?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     failureReason?: string,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
