<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdentityId
 * @property string|null $DatasetName
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LastModifiedBy
 * @property int|null $DataStorage
 * @property int|null $NumRecords
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     IdentityId?: string|null,
     *     DatasetName?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: string|null,
     *     DataStorage?: int|null,
     *     NumRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
