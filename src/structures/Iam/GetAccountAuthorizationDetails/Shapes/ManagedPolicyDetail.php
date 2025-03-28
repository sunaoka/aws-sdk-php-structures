<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 * @property string|null $PolicyId
 * @property string|null $Arn
 * @property string|null $Path
 * @property string|null $DefaultVersionId
 * @property int|null $AttachmentCount
 * @property int|null $PermissionsBoundaryUsageCount
 * @property bool|null $IsAttachable
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property \Aws\Api\DateTimeResult|null $UpdateDate
 * @property list<PolicyVersion>|null $PolicyVersionList
 */
class ManagedPolicyDetail extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string|null,
     *     PolicyId?: string|null,
     *     Arn?: string|null,
     *     Path?: string|null,
     *     DefaultVersionId?: string|null,
     *     AttachmentCount?: int|null,
     *     PermissionsBoundaryUsageCount?: int|null,
     *     IsAttachable?: bool|null,
     *     Description?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     UpdateDate?: \Aws\Api\DateTimeResult|null,
     *     PolicyVersionList?: list<PolicyVersion>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
