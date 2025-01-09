<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableIdentifier
 */
class GetConfiguredTableRequest extends Request
{
    /**
     * @param array{configuredTableIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
