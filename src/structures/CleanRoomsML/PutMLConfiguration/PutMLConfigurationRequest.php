<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\PutMLConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property Shapes\MLOutputConfiguration $defaultOutputLocation
 */
class PutMLConfigurationRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     defaultOutputLocation: Shapes\MLOutputConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
