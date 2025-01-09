<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Ip
 * @property string $Domain
 * @property int $Port
 * @property NetworkGeoLocation $Location
 * @property NetworkAutonomousSystem $AutonomousSystem
 * @property NetworkConnection $Connection
 */
class NetworkEndpoint extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Ip?: string,
     *     Domain?: string,
     *     Port?: int,
     *     Location?: NetworkGeoLocation,
     *     AutonomousSystem?: NetworkAutonomousSystem,
     *     Connection?: NetworkConnection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
