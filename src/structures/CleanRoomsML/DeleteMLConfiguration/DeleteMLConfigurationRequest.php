<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteMLConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 */
class DeleteMLConfigurationRequest extends Request
{
    /**
     * @param array{membershipIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
