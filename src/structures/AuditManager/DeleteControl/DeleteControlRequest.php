<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlId
 */
class DeleteControlRequest extends Request
{
    /**
     * @param array{controlId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
