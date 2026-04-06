<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 * @property Shapes\MultiplexSettings|null $MultiplexSettings
 * @property string|null $Name
 */
class UpdateMultiplexRequest extends Request
{
    /**
     * @param array{
     *     MultiplexId: string,
     *     MultiplexSettings?: Shapes\MultiplexSettings|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
