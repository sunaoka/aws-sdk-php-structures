<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment $Attachment
 * @property array<string, PerObjectStatus> $Config
 */
class SyncState extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment,
     *     Config?: array<string, PerObjectStatus>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
