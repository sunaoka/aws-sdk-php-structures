<?php

namespace Sunaoka\Aws\Structures\Interconnect\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Provider $provider
 * @property string $location
 * @property string $environmentId
 * @property 'available'|'limited'|'unavailable' $state
 * @property Bandwidths $bandwidths
 * @property string $type
 * @property string|null $activationPageUrl
 * @property 'account'|'email'|null $remoteIdentifierType
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     provider: Provider,
     *     location: string,
     *     environmentId: string,
     *     state: 'available'|'limited'|'unavailable',
     *     bandwidths: Bandwidths,
     *     type: string,
     *     activationPageUrl?: string|null,
     *     remoteIdentifierType?: 'account'|'email'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
