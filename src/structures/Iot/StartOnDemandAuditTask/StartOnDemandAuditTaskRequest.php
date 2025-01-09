<?php

namespace Sunaoka\Aws\Structures\Iot\StartOnDemandAuditTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $targetCheckNames
 */
class StartOnDemandAuditTaskRequest extends Request
{
    /**
     * @param array{targetCheckNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
