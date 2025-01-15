<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $AssumeRolePolicyDocument
 * @property string|null $CreateDate
 * @property string|null $Path
 * @property string|null $RoleId
 * @property string|null $RoleName
 */
class AwsIamInstanceProfileRole extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AssumeRolePolicyDocument?: string|null,
     *     CreateDate?: string|null,
     *     Path?: string|null,
     *     RoleId?: string|null,
     *     RoleName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
