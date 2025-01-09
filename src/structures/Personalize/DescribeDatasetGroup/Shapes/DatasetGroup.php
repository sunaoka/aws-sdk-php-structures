<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $datasetGroupArn
 * @property string $status
 * @property string $roleArn
 * @property string $kmsKeyArn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND' $domain
 */
class DatasetGroup extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     datasetGroupArn?: string,
     *     status?: string,
     *     roleArn?: string,
     *     kmsKeyArn?: string,
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
