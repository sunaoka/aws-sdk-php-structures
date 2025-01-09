<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 * @property Shapes\InputOrigin $origin
 * @property Shapes\CacheBehavior $defaultCacheBehavior
 * @property Shapes\CacheSettings $cacheBehaviorSettings
 * @property list<Shapes\CacheBehaviorPerPath> $cacheBehaviors
 * @property bool $isEnabled
 * @property 'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021' $viewerMinimumTlsProtocolVersion
 * @property string $certificateName
 * @property bool $useDefaultCertificate
 */
class UpdateDistributionRequest extends Request
{
    /**
     * @param array{
     *     distributionName: string,
     *     origin?: Shapes\InputOrigin,
     *     defaultCacheBehavior?: Shapes\CacheBehavior,
     *     cacheBehaviorSettings?: Shapes\CacheSettings,
     *     cacheBehaviors?: list<Shapes\CacheBehaviorPerPath>,
     *     isEnabled?: bool,
     *     viewerMinimumTlsProtocolVersion?: 'TLSv1.1_2016'|'TLSv1.2_2018'|'TLSv1.2_2019'|'TLSv1.2_2021',
     *     certificateName?: string,
     *     useDefaultCertificate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
