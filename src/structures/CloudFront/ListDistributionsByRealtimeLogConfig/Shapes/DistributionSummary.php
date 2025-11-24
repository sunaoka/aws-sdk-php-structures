<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByRealtimeLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ARN
 * @property string|null $ETag
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $DomainName
 * @property Aliases $Aliases
 * @property Origins $Origins
 * @property OriginGroups|null $OriginGroups
 * @property DefaultCacheBehavior $DefaultCacheBehavior
 * @property CacheBehaviors $CacheBehaviors
 * @property CustomErrorResponses $CustomErrorResponses
 * @property string $Comment
 * @property 'PriceClass_100'|'PriceClass_200'|'PriceClass_All'|'None' $PriceClass
 * @property bool $Enabled
 * @property ViewerCertificate $ViewerCertificate
 * @property Restrictions $Restrictions
 * @property string $WebACLId
 * @property 'http1.1'|'http2'|'http3'|'http2and3' $HttpVersion
 * @property bool $IsIPV6Enabled
 * @property list<AliasICPRecordal>|null $AliasICPRecordals
 * @property bool $Staging
 * @property 'direct'|'tenant-only'|null $ConnectionMode
 * @property string|null $AnycastIpListId
 * @property ViewerMtlsConfig|null $ViewerMtlsConfig
 * @property ConnectionFunctionAssociation|null $ConnectionFunctionAssociation
 */
class DistributionSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ARN: string,
     *     ETag?: string|null,
     *     Status: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     DomainName: string,
     *     Aliases: Aliases,
     *     Origins: Origins,
     *     OriginGroups?: OriginGroups|null,
     *     DefaultCacheBehavior: DefaultCacheBehavior,
     *     CacheBehaviors: CacheBehaviors,
     *     CustomErrorResponses: CustomErrorResponses,
     *     Comment: string,
     *     PriceClass: 'PriceClass_100'|'PriceClass_200'|'PriceClass_All'|'None',
     *     Enabled: bool,
     *     ViewerCertificate: ViewerCertificate,
     *     Restrictions: Restrictions,
     *     WebACLId: string,
     *     HttpVersion: 'http1.1'|'http2'|'http3'|'http2and3',
     *     IsIPV6Enabled: bool,
     *     AliasICPRecordals?: list<AliasICPRecordal>|null,
     *     Staging: bool,
     *     ConnectionMode?: 'direct'|'tenant-only'|null,
     *     AnycastIpListId?: string|null,
     *     ViewerMtlsConfig?: ViewerMtlsConfig|null,
     *     ConnectionFunctionAssociation?: ConnectionFunctionAssociation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
