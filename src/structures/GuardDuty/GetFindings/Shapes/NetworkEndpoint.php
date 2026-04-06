<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $Ip
 * @property string|null $Domain
 * @property int|null $Port
 * @property NetworkGeoLocation|null $Location
 * @property AutonomousSystem|null $AutonomousSystem
 * @property NetworkConnection|null $Connection
 */
class NetworkEndpoint extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Ip?: string|null,
     *     Domain?: string|null,
     *     Port?: int|null,
     *     Location?: NetworkGeoLocation|null,
     *     AutonomousSystem?: AutonomousSystem|null,
     *     Connection?: NetworkConnection|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
