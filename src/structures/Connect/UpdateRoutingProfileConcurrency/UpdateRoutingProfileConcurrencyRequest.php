<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileConcurrency;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RoutingProfileId
 * @property list<Shapes\MediaConcurrency> $MediaConcurrencies
 */
class UpdateRoutingProfileConcurrencyRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RoutingProfileId: string,
     *     MediaConcurrencies: list<Shapes\MediaConcurrency>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
