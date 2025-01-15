<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment|null $Attachment
 * @property array<string, PerObjectStatus>|null $Config
 */
class SyncState extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment|null,
     *     Config?: array<string, PerObjectStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
