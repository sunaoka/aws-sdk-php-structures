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
     *     useDefaultCertificate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
