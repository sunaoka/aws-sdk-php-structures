<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerReference
 * @property Aliases $Aliases
 * @property string $DefaultRootObject
 * @property Origins $Origins
 * @property OriginGroups $OriginGroups
 * @property DefaultCacheBehavior $DefaultCacheBehavior
 * @property CacheBehaviors $CacheBehaviors
 * @property CustomErrorResponses $CustomErrorResponses
 * @property string $Comment
 * @property LoggingConfig $Logging
 * @property 'PriceClass_100'|'PriceClass_200'|'PriceClass_All' $PriceClass
 * @property bool $Enabled
 * @property ViewerCertificate $ViewerCertificate
 * @property Restrictions $Restrictions
 * @property string $WebACLId
 * @property 'http1.1'|'http2'|'http3'|'http2and3' $HttpVersion
 * @property bool $IsIPV6Enabled
 * @property string $ContinuousDeploymentPolicyId
 * @property bool $Staging
 * @property string $AnycastIpListId
 */
class DistributionConfig extends Shape
{
    /**
     * @param array{
     *     CallerReference: string,
     *     Aliases?: Aliases,
     *     DefaultRootObject?: string,
     *     Origins: Origins,
     *     OriginGroups?: OriginGroups,
     *     DefaultCacheBehavior: DefaultCacheBehavior,
     *     CacheBehaviors?: CacheBehaviors,
     *     CustomErrorResponses?: CustomErrorResponses,
     *     Comment: string,
     *     Logging?: LoggingConfig,
     *     PriceClass?: 'PriceClass_100'|'PriceClass_200'|'PriceClass_All',
     *     Enabled: bool,
     *     ViewerCertificate?: ViewerCertificate,
     *     Restrictions?: Restrictions,
     *     WebACLId?: string,
     *     HttpVersion?: 'http1.1'|'http2'|'http3'|'http2and3',
     *     IsIPV6Enabled?: bool,
     *     ContinuousDeploymentPolicyId?: string,
     *     Staging?: bool,
     *     AnycastIpListId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
