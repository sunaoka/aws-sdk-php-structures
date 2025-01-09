<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportAssetToSignedUrlResponseDetails $ExportAssetToSignedUrl
 * @property ExportAssetsToS3ResponseDetails $ExportAssetsToS3
 * @property ExportRevisionsToS3ResponseDetails $ExportRevisionsToS3
 * @property ImportAssetFromSignedUrlResponseDetails $ImportAssetFromSignedUrl
 * @property ImportAssetsFromS3ResponseDetails $ImportAssetsFromS3
 * @property ImportAssetsFromRedshiftDataSharesResponseDetails $ImportAssetsFromRedshiftDataShares
 * @property ImportAssetFromApiGatewayApiResponseDetails $ImportAssetFromApiGatewayApi
 * @property CreateS3DataAccessFromS3BucketResponseDetails $CreateS3DataAccessFromS3Bucket
 * @property ImportAssetsFromLakeFormationTagPolicyResponseDetails $ImportAssetsFromLakeFormationTagPolicy
 */
class ResponseDetails extends Shape
{
    /**
     * @param array{
     *     ExportAssetToSignedUrl?: ExportAssetToSignedUrlResponseDetails,
     *     ExportAssetsToS3?: ExportAssetsToS3ResponseDetails,
     *     ExportRevisionsToS3?: ExportRevisionsToS3ResponseDetails,
     *     ImportAssetFromSignedUrl?: ImportAssetFromSignedUrlResponseDetails,
     *     ImportAssetsFromS3?: ImportAssetsFromS3ResponseDetails,
     *     ImportAssetsFromRedshiftDataShares?: ImportAssetsFromRedshiftDataSharesResponseDetails,
     *     ImportAssetFromApiGatewayApi?: ImportAssetFromApiGatewayApiResponseDetails,
     *     CreateS3DataAccessFromS3Bucket?: CreateS3DataAccessFromS3BucketResponseDetails,
     *     ImportAssetsFromLakeFormationTagPolicy?: ImportAssetsFromLakeFormationTagPolicyResponseDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
