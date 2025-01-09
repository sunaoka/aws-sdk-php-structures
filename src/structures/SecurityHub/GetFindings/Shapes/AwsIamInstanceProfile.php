<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreateDate
 * @property string $InstanceProfileId
 * @property string $InstanceProfileName
 * @property string $Path
 * @property list<AwsIamInstanceProfileRole> $Roles
 */
class AwsIamInstanceProfile extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreateDate?: string,
     *     InstanceProfileId?: string,
     *     InstanceProfileName?: string,
     *     Path?: string,
     *     Roles?: list<AwsIamInstanceProfileRole>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
