<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableIdentifier
 */
class DeleteConfiguredTableRequest extends Request
{
    /**
     * @param array{configuredTableIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
