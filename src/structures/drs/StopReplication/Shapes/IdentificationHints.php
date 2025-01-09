<?php

namespace Sunaoka\Aws\Structures\drs\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsInstanceID
 * @property string $fqdn
 * @property string $hostname
 * @property string $vmWareUuid
 */
class IdentificationHints extends Shape
{
    /**
     * @param array{
     *     awsInstanceID?: string,
     *     fqdn?: string,
     *     hostname?: string,
     *     vmWareUuid?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
