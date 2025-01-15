<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property list<list<string>>|null $JoinEuiFilters
 * @property list<string>|null $NetIdFilters
 * @property float|null $MaxEirp
 */
class UpdateWirelessGatewayRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     JoinEuiFilters?: list<list<string>>|null,
     *     NetIdFilters?: list<string>|null,
     *     MaxEirp?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
