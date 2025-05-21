<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\AddStreamGroupLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property list<Shapes\LocationConfiguration> $LocationConfigurations
 */
class AddStreamGroupLocationsRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     LocationConfigurations: list<Shapes\LocationConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
