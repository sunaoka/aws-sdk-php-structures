<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableIdentifier
 * @property string $name
 * @property string $description
 */
class UpdateConfiguredTableRequest extends Request
{
    /**
     * @param array{
     *     configuredTableIdentifier: string,
     *     name?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
