<?php

namespace Sunaoka\Aws\Structures\drs\RetryDataReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fqdn
 * @property string|null $hostname
 * @property string|null $vmWareUuid
 * @property string|null $awsInstanceID
 */
class IdentificationHints extends Shape
{
    /**
     * @param array{
     *     fqdn?: string|null,
     *     hostname?: string|null,
     *     vmWareUuid?: string|null,
     *     awsInstanceID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
