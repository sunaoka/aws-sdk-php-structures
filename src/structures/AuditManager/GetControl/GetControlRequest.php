<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlId
 */
class GetControlRequest extends Request
{
    /**
     * @param array{controlId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
