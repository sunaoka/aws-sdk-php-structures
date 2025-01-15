<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableIdentifier
 * @property string|null $name
 * @property string|null $description
 */
class UpdateConfiguredTableRequest extends Request
{
    /**
     * @param array{
     *     configuredTableIdentifier: string,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
