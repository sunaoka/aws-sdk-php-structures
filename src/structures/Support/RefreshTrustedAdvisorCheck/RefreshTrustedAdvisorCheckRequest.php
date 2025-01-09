<?php

namespace Sunaoka\Aws\Structures\Support\RefreshTrustedAdvisorCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $checkId
 */
class RefreshTrustedAdvisorCheckRequest extends Request
{
    /**
     * @param array{checkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
