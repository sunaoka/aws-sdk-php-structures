<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartPolicyGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PolicyGenerationDetails $policyGenerationDetails
 * @property Shapes\CloudTrailDetails $cloudTrailDetails
 * @property string $clientToken
 */
class StartPolicyGenerationRequest extends Request
{
    /**
     * @param array{
     *     policyGenerationDetails: Shapes\PolicyGenerationDetails,
     *     cloudTrailDetails?: Shapes\CloudTrailDetails,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
