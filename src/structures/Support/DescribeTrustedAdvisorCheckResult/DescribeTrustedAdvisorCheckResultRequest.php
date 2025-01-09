<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $checkId
 * @property string $language
 */
class DescribeTrustedAdvisorCheckResultRequest extends Request
{
    /**
     * @param array{
     *     checkId: string,
     *     language?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
