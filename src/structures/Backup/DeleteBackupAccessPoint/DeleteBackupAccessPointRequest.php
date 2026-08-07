<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessPointArn
 */
class DeleteBackupAccessPointRequest extends Request
{
    /**
     * @param array{AccessPointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
