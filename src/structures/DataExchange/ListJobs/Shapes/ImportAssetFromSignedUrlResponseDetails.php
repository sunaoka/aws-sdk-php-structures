<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetName
 * @property string $DataSetId
 * @property string|null $Md5Hash
 * @property string $RevisionId
 * @property string|null $SignedUrl
 * @property \Aws\Api\DateTimeResult|null $SignedUrlExpiresAt
 */
class ImportAssetFromSignedUrlResponseDetails extends Shape
{
    /**
     * @param array{
     *     AssetName: string,
     *     DataSetId: string,
     *     Md5Hash?: string|null,
     *     RevisionId: string,
     *     SignedUrl?: string|null,
     *     SignedUrlExpiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
