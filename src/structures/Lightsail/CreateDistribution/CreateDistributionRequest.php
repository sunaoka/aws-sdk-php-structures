<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 * @property Shapes\InputOrigin $origin
 * @property Shapes\CacheBehavior $defaultCacheBehavior
 * @property Shapes\CacheSettings $cacheBehaviorSettings
 * @property list<Shapes\CacheBehaviorPerPath> $cacheBehaviors
 * @property string $bundleId
 * @property 'dualstack'|'ipv4'|'ipv6' $ipAddressType
 * @property list<Shapes\Tag> $tags
 * @property string $certificateName
 * @property 'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021' $viewerMinimumTlsProtocolVersion
 */
class CreateDistributionRequest extends Request
{
    /**
     * @param array{
     *     distributionName: string,
     *     origin: Shapes\InputOrigin,
     *     defaultCacheBehavior: Shapes\CacheBehavior,
     *     cacheBehaviorSettings?: Shapes\CacheSettings,
     *     cacheBehaviors?: list<Shapes\CacheBehaviorPerPath>,
     *     bundleId: string,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6',
     *     tags?: list<Shapes\Tag>,
     *     certificateName?: string,
     *     viewerMinimumTlsProtocolVersion?: 'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
