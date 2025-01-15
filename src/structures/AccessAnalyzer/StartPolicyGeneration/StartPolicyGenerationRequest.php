<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartPolicyGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PolicyGenerationDetails $policyGenerationDetails
 * @property Shapes\CloudTrailDetails|null $cloudTrailDetails
 * @property string|null $clientToken
 */
class StartPolicyGenerationRequest extends Request
{
    /**
     * @param array{
     *     policyGenerationDetails: Shapes\PolicyGenerationDetails,
     *     cloudTrailDetails?: Shapes\CloudTrailDetails|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
