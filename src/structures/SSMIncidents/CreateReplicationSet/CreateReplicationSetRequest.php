<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateReplicationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property array<string, Shapes\RegionMapInputValue> $regions
 * @property array<string, string> $tags
 */
class CreateReplicationSetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     regions: array<string, Shapes\RegionMapInputValue>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
