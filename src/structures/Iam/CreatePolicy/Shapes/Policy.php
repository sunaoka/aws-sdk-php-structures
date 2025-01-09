<?php

namespace Sunaoka\Aws\Structures\Iam\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property string $PolicyId
 * @property string $Arn
 * @property string $Path
 * @property string $DefaultVersionId
 * @property int $AttachmentCount
 * @property int $PermissionsBoundaryUsageCount
 * @property bool $IsAttachable
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property \Aws\Api\DateTimeResult $UpdateDate
 * @property list<Tag> $Tags
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string,
     *     PolicyId?: string,
     *     Arn?: string,
     *     Path?: string,
     *     DefaultVersionId?: string,
     *     AttachmentCount?: int,
     *     PermissionsBoundaryUsageCount?: int,
     *     IsAttachable?: bool,
     *     Description?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     UpdateDate?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
