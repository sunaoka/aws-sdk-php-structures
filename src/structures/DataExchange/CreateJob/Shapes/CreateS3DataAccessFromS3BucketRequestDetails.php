<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataAccessAssetSourceEntry $AssetSource
 * @property string $DataSetId
 * @property string $RevisionId
 */
class CreateS3DataAccessFromS3BucketRequestDetails extends Shape
{
    /**
     * @param array{
     *     AssetSource: S3DataAccessAssetSourceEntry,
     *     DataSetId: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
