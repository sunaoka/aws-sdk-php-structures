<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByAnycastIpListId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ARN
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
 * @property 'PriceClass_100'|'PriceClass_200'|'PriceClass_All' $PriceClass
 * @property bool $Enabled
 * @property ViewerCertificate $ViewerCertificate
 * @property Restrictions $Restrictions
 * @property string $WebACLId
 * @property 'http1.1'|'http2'|'http3'|'http2and3' $HttpVersion
 * @property bool $IsIPV6Enabled
 * @property list<AliasICPRecordal>|null $AliasICPRecordals
 * @property bool $Staging
 * @property string|null $AnycastIpListId
 */
class DistributionSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ARN: string,
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
     *     PriceClass: 'PriceClass_100'|'PriceClass_200'|'PriceClass_All',
     *     Enabled: bool,
     *     ViewerCertificate: ViewerCertificate,
     *     Restrictions: Restrictions,
     *     WebACLId: string,
     *     HttpVersion: 'http1.1'|'http2'|'http3'|'http2and3',
     *     IsIPV6Enabled: bool,
     *     AliasICPRecordals?: list<AliasICPRecordal>|null,
     *     Staging: bool,
     *     AnycastIpListId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
