<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionDirection
 * @property ActionRemoteIpDetails|null $RemoteIpDetails
 * @property ActionRemotePortDetails|null $RemotePortDetails
 * @property ActionLocalPortDetails|null $LocalPortDetails
 * @property string|null $Protocol
 * @property bool|null $Blocked
 */
class NetworkConnectionAction extends Shape
{
    /**
     * @param array{
     *     ConnectionDirection?: string|null,
     *     RemoteIpDetails?: ActionRemoteIpDetails|null,
     *     RemotePortDetails?: ActionRemotePortDetails|null,
     *     LocalPortDetails?: ActionLocalPortDetails|null,
     *     Protocol?: string|null,
     *     Blocked?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
