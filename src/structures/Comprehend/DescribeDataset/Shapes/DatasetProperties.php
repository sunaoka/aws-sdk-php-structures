<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetArn
 * @property string $DatasetName
 * @property 'TRAIN'|'TEST' $DatasetType
 * @property string $DatasetS3Uri
 * @property string $Description
 * @property 'CREATING'|'COMPLETED'|'FAILED' $Status
 * @property string $Message
 * @property int $NumberOfDocuments
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class DatasetProperties extends Shape
{
    /**
     * @param array{
     *     DatasetArn?: string,
     *     DatasetName?: string,
     *     DatasetType?: 'TRAIN'|'TEST',
     *     DatasetS3Uri?: string,
     *     Description?: string,
     *     Status?: 'CREATING'|'COMPLETED'|'FAILED',
     *     Message?: string,
     *     NumberOfDocuments?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
