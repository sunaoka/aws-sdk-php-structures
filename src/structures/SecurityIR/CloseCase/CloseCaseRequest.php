<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CloseCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 */
class CloseCaseRequest extends Request
{
    /**
     * @param array{caseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
