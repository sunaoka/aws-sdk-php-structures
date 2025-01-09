<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityId
 * @property string $DatasetName
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedBy
 * @property int $DataStorage
 * @property int $NumRecords
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     IdentityId?: string,
     *     DatasetName?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: string,
     *     DataStorage?: int,
     *     NumRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
