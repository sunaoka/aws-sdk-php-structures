<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property list<list<string>> $JoinEuiFilters
 * @property list<string> $NetIdFilters
 * @property float $MaxEirp
 */
class UpdateWirelessGatewayRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     Description?: string,
     *     JoinEuiFilters?: list<list<string>>,
     *     NetIdFilters?: list<string>,
     *     MaxEirp?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
