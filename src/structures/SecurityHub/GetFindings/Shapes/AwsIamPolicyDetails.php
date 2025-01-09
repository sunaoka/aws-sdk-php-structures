<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AttachmentCount
 * @property string $CreateDate
 * @property string $DefaultVersionId
 * @property string $Description
 * @property bool $IsAttachable
 * @property string $Path
 * @property int $PermissionsBoundaryUsageCount
 * @property string $PolicyId
 * @property string $PolicyName
 * @property list<AwsIamPolicyVersion> $PolicyVersionList
 * @property string $UpdateDate
 */
class AwsIamPolicyDetails extends Shape
{
    /**
     * @param array{
     *     AttachmentCount?: int,
     *     CreateDate?: string,
     *     DefaultVersionId?: string,
     *     Description?: string,
     *     IsAttachable?: bool,
     *     Path?: string,
     *     PermissionsBoundaryUsageCount?: int,
     *     PolicyId?: string,
     *     PolicyName?: string,
     *     PolicyVersionList?: list<AwsIamPolicyVersion>,
     *     UpdateDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
