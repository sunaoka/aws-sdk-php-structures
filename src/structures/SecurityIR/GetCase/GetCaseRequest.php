<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 */
class GetCaseRequest extends Request
{
    /**
     * @param array{caseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
