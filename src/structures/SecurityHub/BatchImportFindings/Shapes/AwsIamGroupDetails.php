<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsIamAttachedManagedPolicy>|null $AttachedManagedPolicies
 * @property string|null $CreateDate
 * @property string|null $GroupId
 * @property string|null $GroupName
 * @property list<AwsIamGroupPolicy>|null $GroupPolicyList
 * @property string|null $Path
 */
class AwsIamGroupDetails extends Shape
{
    /**
     * @param array{
     *     AttachedManagedPolicies?: list<AwsIamAttachedManagedPolicy>|null,
     *     CreateDate?: string|null,
     *     GroupId?: string|null,
     *     GroupName?: string|null,
     *     GroupPolicyList?: list<AwsIamGroupPolicy>|null,
     *     Path?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
