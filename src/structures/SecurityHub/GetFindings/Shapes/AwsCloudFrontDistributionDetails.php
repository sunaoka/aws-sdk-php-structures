<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCloudFrontDistributionCacheBehaviors $CacheBehaviors
 * @property AwsCloudFrontDistributionDefaultCacheBehavior $DefaultCacheBehavior
 * @property string $DefaultRootObject
 * @property string $DomainName
 * @property string $ETag
 * @property string $LastModifiedTime
 * @property AwsCloudFrontDistributionLogging $Logging
 * @property AwsCloudFrontDistributionOrigins $Origins
 * @property AwsCloudFrontDistributionOriginGroups $OriginGroups
 * @property AwsCloudFrontDistributionViewerCertificate $ViewerCertificate
 * @property string $Status
 * @property string $WebAclId
 */
class AwsCloudFrontDistributionDetails extends Shape
{
    /**
     * @param array{
     *     CacheBehaviors?: AwsCloudFrontDistributionCacheBehaviors,
     *     DefaultCacheBehavior?: AwsCloudFrontDistributionDefaultCacheBehavior,
     *     DefaultRootObject?: string,
     *     DomainName?: string,
     *     ETag?: string,
     *     LastModifiedTime?: string,
     *     Logging?: AwsCloudFrontDistributionLogging,
     *     Origins?: AwsCloudFrontDistributionOrigins,
     *     OriginGroups?: AwsCloudFrontDistributionOriginGroups,
     *     ViewerCertificate?: AwsCloudFrontDistributionViewerCertificate,
     *     Status?: string,
     *     WebAclId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
