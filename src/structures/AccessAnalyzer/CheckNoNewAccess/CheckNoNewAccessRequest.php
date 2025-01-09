<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckNoNewAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $newPolicyDocument
 * @property string $existingPolicyDocument
 * @property 'IDENTITY_POLICY'|'RESOURCE_POLICY' $policyType
 */
class CheckNoNewAccessRequest extends Request
{
    /**
     * @param array{
     *     newPolicyDocument: string,
     *     existingPolicyDocument: string,
     *     policyType: 'IDENTITY_POLICY'|'RESOURCE_POLICY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
