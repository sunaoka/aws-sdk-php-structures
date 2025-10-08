<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $action
 * @property array<string, string>|null $condition
 * @property array<string, string>|null $principal
 * @property string|null $principalOwnerAccount
 * @property 'INTRA_ACCOUNT'|'INTRA_ORG'|null $accessType
 * @property 'IAM_ROLE'|'IAM_USER'|null $principalType
 * @property list<FindingSource>|null $sources
 * @property 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE'|'APPLIED'|null $resourceControlPolicyRestriction
 * @property 'APPLICABLE'|'FAILED_TO_EVALUATE_SCP'|'NOT_APPLICABLE'|'APPLIED'|null $serviceControlPolicyRestriction
 */
class InternalAccessDetails extends Shape
{
    /**
     * @param array{
     *     action?: list<string>|null,
     *     condition?: array<string, string>|null,
     *     principal?: array<string, string>|null,
     *     principalOwnerAccount?: string|null,
     *     accessType?: 'INTRA_ACCOUNT'|'INTRA_ORG'|null,
     *     principalType?: 'IAM_ROLE'|'IAM_USER'|null,
     *     sources?: list<FindingSource>|null,
     *     resourceControlPolicyRestriction?: 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE'|'APPLIED'|null,
     *     serviceControlPolicyRestriction?: 'APPLICABLE'|'FAILED_TO_EVALUATE_SCP'|'NOT_APPLICABLE'|'APPLIED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
