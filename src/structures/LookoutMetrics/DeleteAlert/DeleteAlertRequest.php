<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DeleteAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlertArn
 */
class DeleteAlertRequest extends Request
{
    /**
     * @param array{AlertArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
