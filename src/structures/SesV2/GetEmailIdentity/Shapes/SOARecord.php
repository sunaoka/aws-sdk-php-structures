<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryNameServer
 * @property string $AdminEmail
 * @property int $SerialNumber
 */
class SOARecord extends Shape
{
    /**
     * @param array{
     *     PrimaryNameServer?: string,
     *     AdminEmail?: string,
     *     SerialNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
