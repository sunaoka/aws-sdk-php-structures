<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerReference
 * @property Aliases|null $Aliases
 * @property string|null $DefaultRootObject
 * @property Origins $Origins
 * @property OriginGroups|null $OriginGroups
 * @property DefaultCacheBehavior $DefaultCacheBehavior
 * @property CacheBehaviors|null $CacheBehaviors
 * @property CustomErrorResponses|null $CustomErrorResponses
 * @property string $Comment
 * @property LoggingConfig|null $Logging
 * @property 'PriceClass_100'|'PriceClass_200'|'PriceClass_All'|null $PriceClass
 * @property bool $Enabled
 * @property ViewerCertificate|null $ViewerCertificate
 * @property Restrictions|null $Restrictions
 * @property string|null $WebACLId
 * @property 'http1.1'|'http2'|'http3'|'http2and3'|null $HttpVersion
 * @property bool|null $IsIPV6Enabled
 * @property string|null $ContinuousDeploymentPolicyId
 * @property bool|null $Staging
 * @property string|null $AnycastIpListId
 */
class DistributionConfig extends Shape
{
    /**
     * @param array{
     *     CallerReference: string,
     *     Aliases?: Aliases|null,
     *     DefaultRootObject?: string|null,
     *     Origins: Origins,
     *     OriginGroups?: OriginGroups|null,
     *     DefaultCacheBehavior: DefaultCacheBehavior,
     *     CacheBehaviors?: CacheBehaviors|null,
     *     CustomErrorResponses?: CustomErrorResponses|null,
     *     Comment: string,
     *     Logging?: LoggingConfig|null,
     *     PriceClass?: 'PriceClass_100'|'PriceClass_200'|'PriceClass_All'|null,
     *     Enabled: bool,
     *     ViewerCertificate?: ViewerCertificate|null,
     *     Restrictions?: Restrictions|null,
     *     WebACLId?: string|null,
     *     HttpVersion?: 'http1.1'|'http2'|'http3'|'http2and3'|null,
     *     IsIPV6Enabled?: bool|null,
     *     ContinuousDeploymentPolicyId?: string|null,
     *     Staging?: bool|null,
     *     AnycastIpListId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
