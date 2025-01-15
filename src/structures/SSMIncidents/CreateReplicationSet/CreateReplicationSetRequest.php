<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateReplicationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property array<string, Shapes\RegionMapInputValue> $regions
 * @property array<string, string>|null $tags
 */
class CreateReplicationSetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     regions: array<string, Shapes\RegionMapInputValue>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
