<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrimaryNameServer
 * @property string|null $AdminEmail
 * @property int|null $SerialNumber
 */
class SOARecord extends Shape
{
    /**
     * @param array{
     *     PrimaryNameServer?: string|null,
     *     AdminEmail?: string|null,
     *     SerialNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
