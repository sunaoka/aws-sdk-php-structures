<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetName
 * @property string $DataSetId
 * @property string $Md5Hash
 * @property string $RevisionId
 * @property string $SignedUrl
 * @property \Aws\Api\DateTimeResult $SignedUrlExpiresAt
 */
class ImportAssetFromSignedUrlResponseDetails extends Shape
{
    /**
     * @param array{
     *     AssetName: string,
     *     DataSetId: string,
     *     Md5Hash?: string,
     *     RevisionId: string,
     *     SignedUrl?: string,
     *     SignedUrlExpiresAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
