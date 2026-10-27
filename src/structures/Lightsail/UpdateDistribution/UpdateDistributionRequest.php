<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 * @property Shapes\InputOrigin|null $origin
 * @property Shapes\CacheBehavior|null $defaultCacheBehavior
 * @property Shapes\CacheSettings|null $cacheBehaviorSettings
 * @property list<Shapes\CacheBehaviorPerPath>|null $cacheBehaviors
 * @property bool|null $isEnabled
 * @property 'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021'|null $viewerMinimumTlsProtocolVersion
 * @property string|null $certificateName
 * @property bool|null $useDefaultCertificate
 * @property bool|null $enablePrivateOriginAccess
 * @property string|null $defaultRootObject
 * @property list<Shapes\DistributionCustomErrorResponse>|null $customErrorResponses
 * @property bool|null $enableWaf
 * @property list<Shapes\WafRule>|null $wafRules
 */
class UpdateDistributionRequest extends Request
{
    /**
     * @param array{
     *     distributionName: string,
     *     origin?: Shapes\InputOrigin|null,
     *     defaultCacheBehavior?: Shapes\CacheBehavior|null,
     *     cacheBehaviorSettings?: Shapes\CacheSettings|null,
     *     cacheBehaviors?: list<Shapes\CacheBehaviorPerPath>|null,
     *     isEnabled?: bool|null,
     *     viewerMinimumTlsProtocolVersion?: 'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021'|null,
     *     certificateName?: string|null,
     *     useDefaultCertificate?: bool|null,
     *     enablePrivateOriginAccess?: bool|null,
     *     defaultRootObject?: string|null,
     *     customErrorResponses?: list<Shapes\DistributionCustomErrorResponse>|null,
     *     enableWaf?: bool|null,
     *     wafRules?: list<Shapes\WafRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
