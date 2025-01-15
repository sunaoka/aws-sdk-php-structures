<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCloudFrontDistributionCacheBehaviors|null $CacheBehaviors
 * @property AwsCloudFrontDistributionDefaultCacheBehavior|null $DefaultCacheBehavior
 * @property string|null $DefaultRootObject
 * @property string|null $DomainName
 * @property string|null $ETag
 * @property string|null $LastModifiedTime
 * @property AwsCloudFrontDistributionLogging|null $Logging
 * @property AwsCloudFrontDistributionOrigins|null $Origins
 * @property AwsCloudFrontDistributionOriginGroups|null $OriginGroups
 * @property AwsCloudFrontDistributionViewerCertificate|null $ViewerCertificate
 * @property string|null $Status
 * @property string|null $WebAclId
 */
class AwsCloudFrontDistributionDetails extends Shape
{
    /**
     * @param array{
     *     CacheBehaviors?: AwsCloudFrontDistributionCacheBehaviors|null,
     *     DefaultCacheBehavior?: AwsCloudFrontDistributionDefaultCacheBehavior|null,
     *     DefaultRootObject?: string|null,
     *     DomainName?: string|null,
     *     ETag?: string|null,
     *     LastModifiedTime?: string|null,
     *     Logging?: AwsCloudFrontDistributionLogging|null,
     *     Origins?: AwsCloudFrontDistributionOrigins|null,
     *     OriginGroups?: AwsCloudFrontDistributionOriginGroups|null,
     *     ViewerCertificate?: AwsCloudFrontDistributionViewerCertificate|null,
     *     Status?: string|null,
     *     WebAclId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
