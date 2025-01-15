<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property bool|null $includeResourcePlaceholders
 * @property bool|null $includeServiceLevelTemplate
 */
class GetGeneratedPolicyRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     includeResourcePlaceholders?: bool|null,
     *     includeServiceLevelTemplate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
