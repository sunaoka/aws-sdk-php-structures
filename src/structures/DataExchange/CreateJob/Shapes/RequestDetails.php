<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportAssetToSignedUrlRequestDetails|null $ExportAssetToSignedUrl
 * @property ExportAssetsToS3RequestDetails|null $ExportAssetsToS3
 * @property ExportRevisionsToS3RequestDetails|null $ExportRevisionsToS3
 * @property ImportAssetFromSignedUrlRequestDetails|null $ImportAssetFromSignedUrl
 * @property ImportAssetsFromS3RequestDetails|null $ImportAssetsFromS3
 * @property ImportAssetsFromRedshiftDataSharesRequestDetails|null $ImportAssetsFromRedshiftDataShares
 * @property ImportAssetFromApiGatewayApiRequestDetails|null $ImportAssetFromApiGatewayApi
 * @property CreateS3DataAccessFromS3BucketRequestDetails|null $CreateS3DataAccessFromS3Bucket
 * @property ImportAssetsFromLakeFormationTagPolicyRequestDetails|null $ImportAssetsFromLakeFormationTagPolicy
 */
class RequestDetails extends Shape
{
    /**
     * @param array{
     *     ExportAssetToSignedUrl?: ExportAssetToSignedUrlRequestDetails|null,
     *     ExportAssetsToS3?: ExportAssetsToS3RequestDetails|null,
     *     ExportRevisionsToS3?: ExportRevisionsToS3RequestDetails|null,
     *     ImportAssetFromSignedUrl?: ImportAssetFromSignedUrlRequestDetails|null,
     *     ImportAssetsFromS3?: ImportAssetsFromS3RequestDetails|null,
     *     ImportAssetsFromRedshiftDataShares?: ImportAssetsFromRedshiftDataSharesRequestDetails|null,
     *     ImportAssetFromApiGatewayApi?: ImportAssetFromApiGatewayApiRequestDetails|null,
     *     CreateS3DataAccessFromS3Bucket?: CreateS3DataAccessFromS3BucketRequestDetails|null,
     *     ImportAssetsFromLakeFormationTagPolicy?: ImportAssetsFromLakeFormationTagPolicyRequestDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
