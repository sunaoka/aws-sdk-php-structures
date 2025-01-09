<?php

namespace Sunaoka\Aws\Structures\Support\ResolveCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 */
class ResolveCaseRequest extends Request
{
    /**
     * @param array{caseId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
