<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AttachmentCount
 * @property string|null $CreateDate
 * @property string|null $DefaultVersionId
 * @property string|null $Description
 * @property bool|null $IsAttachable
 * @property string|null $Path
 * @property int|null $PermissionsBoundaryUsageCount
 * @property string|null $PolicyId
 * @property string|null $PolicyName
 * @property list<AwsIamPolicyVersion>|null $PolicyVersionList
 * @property string|null $UpdateDate
 */
class AwsIamPolicyDetails extends Shape
{
    /**
     * @param array{
     *     AttachmentCount?: int|null,
     *     CreateDate?: string|null,
     *     DefaultVersionId?: string|null,
     *     Description?: string|null,
     *     IsAttachable?: bool|null,
     *     Path?: string|null,
     *     PermissionsBoundaryUsageCount?: int|null,
     *     PolicyId?: string|null,
     *     PolicyName?: string|null,
     *     PolicyVersionList?: list<AwsIamPolicyVersion>|null,
     *     UpdateDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
