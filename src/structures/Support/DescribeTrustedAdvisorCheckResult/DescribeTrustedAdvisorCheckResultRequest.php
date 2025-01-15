<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $checkId
 * @property string|null $language
 */
class DescribeTrustedAdvisorCheckResultRequest extends Request
{
    /**
     * @param array{
     *     checkId: string,
     *     language?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
