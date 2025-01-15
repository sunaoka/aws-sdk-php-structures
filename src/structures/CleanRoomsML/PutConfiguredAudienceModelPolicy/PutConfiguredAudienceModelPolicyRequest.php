<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\PutConfiguredAudienceModelPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelArn
 * @property string $configuredAudienceModelPolicy
 * @property string|null $previousPolicyHash
 * @property 'POLICY_MUST_EXIST'|'POLICY_MUST_NOT_EXIST'|null $policyExistenceCondition
 */
class PutConfiguredAudienceModelPolicyRequest extends Request
{
    /**
     * @param array{
     *     configuredAudienceModelArn: string,
     *     configuredAudienceModelPolicy: string,
     *     previousPolicyHash?: string|null,
     *     policyExistenceCondition?: 'POLICY_MUST_EXIST'|'POLICY_MUST_NOT_EXIST'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
