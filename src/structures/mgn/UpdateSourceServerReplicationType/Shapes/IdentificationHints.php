<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServerReplicationType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsInstanceID
 * @property string $fqdn
 * @property string $hostname
 * @property string $vmPath
 * @property string $vmWareUuid
 */
class IdentificationHints extends Shape
{
    /**
     * @param array{
     *     awsInstanceID?: string,
     *     fqdn?: string,
     *     hostname?: string,
     *     vmPath?: string,
     *     vmWareUuid?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
