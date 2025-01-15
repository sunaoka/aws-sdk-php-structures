<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportAssetToSignedUrlResponseDetails|null $ExportAssetToSignedUrl
 * @property ExportAssetsToS3ResponseDetails|null $ExportAssetsToS3
 * @property ExportRevisionsToS3ResponseDetails|null $ExportRevisionsToS3
 * @property ImportAssetFromSignedUrlResponseDetails|null $ImportAssetFromSignedUrl
 * @property ImportAssetsFromS3ResponseDetails|null $ImportAssetsFromS3
 * @property ImportAssetsFromRedshiftDataSharesResponseDetails|null $ImportAssetsFromRedshiftDataShares
 * @property ImportAssetFromApiGatewayApiResponseDetails|null $ImportAssetFromApiGatewayApi
 * @property CreateS3DataAccessFromS3BucketResponseDetails|null $CreateS3DataAccessFromS3Bucket
 * @property ImportAssetsFromLakeFormationTagPolicyResponseDetails|null $ImportAssetsFromLakeFormationTagPolicy
 */
class ResponseDetails extends Shape
{
    /**
     * @param array{
     *     ExportAssetToSignedUrl?: ExportAssetToSignedUrlResponseDetails|null,
     *     ExportAssetsToS3?: ExportAssetsToS3ResponseDetails|null,
     *     ExportRevisionsToS3?: ExportRevisionsToS3ResponseDetails|null,
     *     ImportAssetFromSignedUrl?: ImportAssetFromSignedUrlResponseDetails|null,
     *     ImportAssetsFromS3?: ImportAssetsFromS3ResponseDetails|null,
     *     ImportAssetsFromRedshiftDataShares?: ImportAssetsFromRedshiftDataSharesResponseDetails|null,
     *     ImportAssetFromApiGatewayApi?: ImportAssetFromApiGatewayApiResponseDetails|null,
     *     CreateS3DataAccessFromS3Bucket?: CreateS3DataAccessFromS3BucketResponseDetails|null,
     *     ImportAssetsFromLakeFormationTagPolicy?: ImportAssetsFromLakeFormationTagPolicyResponseDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
