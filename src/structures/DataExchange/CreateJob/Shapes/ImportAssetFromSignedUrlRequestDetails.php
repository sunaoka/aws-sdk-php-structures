<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetName
 * @property string $DataSetId
 * @property string $Md5Hash
 * @property string $RevisionId
 */
class ImportAssetFromSignedUrlRequestDetails extends Shape
{
    /**
     * @param array{
     *     AssetName: string,
     *     DataSetId: string,
     *     Md5Hash: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
