<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportAssetToSignedUrlRequestDetails $ExportAssetToSignedUrl
 * @property ExportAssetsToS3RequestDetails $ExportAssetsToS3
 * @property ExportRevisionsToS3RequestDetails $ExportRevisionsToS3
 * @property ImportAssetFromSignedUrlRequestDetails $ImportAssetFromSignedUrl
 * @property ImportAssetsFromS3RequestDetails $ImportAssetsFromS3
 * @property ImportAssetsFromRedshiftDataSharesRequestDetails $ImportAssetsFromRedshiftDataShares
 * @property ImportAssetFromApiGatewayApiRequestDetails $ImportAssetFromApiGatewayApi
 * @property CreateS3DataAccessFromS3BucketRequestDetails $CreateS3DataAccessFromS3Bucket
 * @property ImportAssetsFromLakeFormationTagPolicyRequestDetails $ImportAssetsFromLakeFormationTagPolicy
 */
class RequestDetails extends Shape
{
    /**
     * @param array{
     *     ExportAssetToSignedUrl?: ExportAssetToSignedUrlRequestDetails,
     *     ExportAssetsToS3?: ExportAssetsToS3RequestDetails,
     *     ExportRevisionsToS3?: ExportRevisionsToS3RequestDetails,
     *     ImportAssetFromSignedUrl?: ImportAssetFromSignedUrlRequestDetails,
     *     ImportAssetsFromS3?: ImportAssetsFromS3RequestDetails,
     *     ImportAssetsFromRedshiftDataShares?: ImportAssetsFromRedshiftDataSharesRequestDetails,
     *     ImportAssetFromApiGatewayApi?: ImportAssetFromApiGatewayApiRequestDetails,
     *     CreateS3DataAccessFromS3Bucket?: CreateS3DataAccessFromS3BucketRequestDetails,
     *     ImportAssetsFromLakeFormationTagPolicy?: ImportAssetsFromLakeFormationTagPolicyRequestDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
