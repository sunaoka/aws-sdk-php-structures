<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatasetArn
 * @property string|null $DatasetName
 * @property 'TRAIN'|'TEST'|null $DatasetType
 * @property string|null $DatasetS3Uri
 * @property string|null $Description
 * @property 'CREATING'|'COMPLETED'|'FAILED'|null $Status
 * @property string|null $Message
 * @property int|null $NumberOfDocuments
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class DatasetProperties extends Shape
{
    /**
     * @param array{
     *     DatasetArn?: string|null,
     *     DatasetName?: string|null,
     *     DatasetType?: 'TRAIN'|'TEST'|null,
     *     DatasetS3Uri?: string|null,
     *     Description?: string|null,
     *     Status?: 'CREATING'|'COMPLETED'|'FAILED'|null,
     *     Message?: string|null,
     *     NumberOfDocuments?: int|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
