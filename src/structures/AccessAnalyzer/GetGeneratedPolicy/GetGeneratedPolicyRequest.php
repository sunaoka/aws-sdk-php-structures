<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property bool $includeResourcePlaceholders
 * @property bool $includeServiceLevelTemplate
 */
class GetGeneratedPolicyRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     includeResourcePlaceholders?: bool,
     *     includeServiceLevelTemplate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
