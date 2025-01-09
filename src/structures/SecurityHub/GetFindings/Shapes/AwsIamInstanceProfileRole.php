<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AssumeRolePolicyDocument
 * @property string $CreateDate
 * @property string $Path
 * @property string $RoleId
 * @property string $RoleName
 */
class AwsIamInstanceProfileRole extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AssumeRolePolicyDocument?: string,
     *     CreateDate?: string,
     *     Path?: string,
     *     RoleId?: string,
     *     RoleName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
