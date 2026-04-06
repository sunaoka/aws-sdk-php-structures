<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 * @property Shapes\InputOrigin $origin
 * @property Shapes\CacheBehavior $defaultCacheBehavior
 * @property Shapes\CacheSettings|null $cacheBehaviorSettings
 * @property list<Shapes\CacheBehaviorPerPath>|null $cacheBehaviors
 * @property string $bundleId
 * @property 'dualstack'|'ipv4'|'ipv6'|null $ipAddressType
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $certificateName
 * @property 'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021'|null $viewerMinimumTlsProtocolVersion
 */
class CreateDistributionRequest extends Request
{
    /**
     * @param array{
     *     distributionName: string,
     *     origin: Shapes\InputOrigin,
     *     defaultCacheBehavior: Shapes\CacheBehavior,
     *     cacheBehaviorSettings?: Shapes\CacheSettings|null,
     *     cacheBehaviors?: list<Shapes\CacheBehaviorPerPath>|null,
     *     bundleId: string,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6'|null,
     *     tags?: list<Shapes\Tag>|null,
     *     certificateName?: string|null,
     *     viewerMinimumTlsProtocolVersion?: 'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
