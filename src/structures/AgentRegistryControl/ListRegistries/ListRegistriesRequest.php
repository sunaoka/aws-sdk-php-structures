<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListRegistries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\RegistryFilter>|null $filters
 */
class ListRegistriesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filters?: list<Shapes\RegistryFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
