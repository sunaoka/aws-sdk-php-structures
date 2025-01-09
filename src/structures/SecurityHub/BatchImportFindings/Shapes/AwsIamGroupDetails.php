<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsIamAttachedManagedPolicy> $AttachedManagedPolicies
 * @property string $CreateDate
 * @property string $GroupId
 * @property string $GroupName
 * @property list<AwsIamGroupPolicy> $GroupPolicyList
 * @property string $Path
 */
class AwsIamGroupDetails extends Shape
{
    /**
     * @param array{
     *     AttachedManagedPolicies?: list<AwsIamAttachedManagedPolicy>,
     *     CreateDate?: string,
     *     GroupId?: string,
     *     GroupName?: string,
     *     GroupPolicyList?: list<AwsIamGroupPolicy>,
     *     Path?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
