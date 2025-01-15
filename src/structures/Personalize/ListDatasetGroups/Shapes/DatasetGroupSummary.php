<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $datasetGroupArn
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null $domain
 */
class DatasetGroupSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     datasetGroupArn?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReason?: string|null,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
