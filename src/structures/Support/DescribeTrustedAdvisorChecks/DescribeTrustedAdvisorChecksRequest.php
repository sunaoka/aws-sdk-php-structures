<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $language
 */
class DescribeTrustedAdvisorChecksRequest extends Request
{
    /**
     * @param array{language: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
