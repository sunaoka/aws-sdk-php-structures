<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datastoreId
 * @property string $datastoreName
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED' $datastoreStatus
 * @property string|null $kmsKeyArn
 * @property string|null $lambdaAuthorizerArn
 * @property 'HTJ2K'|'JPEG_2000_LOSSLESS'|null $losslessStorageFormat
 * @property string|null $datastoreArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DatastoreProperties extends Shape
{
    /**
     * @param array{
     *     datastoreId: string,
     *     datastoreName: string,
     *     datastoreStatus: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED',
     *     kmsKeyArn?: string|null,
     *     lambdaAuthorizerArn?: string|null,
     *     losslessStorageFormat?: 'HTJ2K'|'JPEG_2000_LOSSLESS'|null,
     *     datastoreArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
