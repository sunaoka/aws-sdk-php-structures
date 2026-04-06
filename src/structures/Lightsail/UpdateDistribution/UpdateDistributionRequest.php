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
     *     isEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
