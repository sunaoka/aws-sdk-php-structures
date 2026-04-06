<?php

namespace Sunaoka\Aws\Structures\mgn\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fqdn
 * @property string|null $hostname
 * @property string|null $vmWareUuid
 * @property string|null $awsInstanceID
 * @property string|null $vmPath
 */
class IdentificationHints extends Shape
{
    /**
     * @param array{
     *     fqdn?: string|null,
     *     hostname?: string|null,
     *     vmWareUuid?: string|null,
     *     awsInstanceID?: string|null,
     *     vmPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
