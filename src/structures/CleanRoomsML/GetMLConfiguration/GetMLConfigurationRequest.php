<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 */
class GetMLConfigurationRequest extends Request
{
    /**
     * @param array{membershipIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
