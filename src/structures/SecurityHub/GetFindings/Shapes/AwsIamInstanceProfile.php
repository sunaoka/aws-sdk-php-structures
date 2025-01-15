<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CreateDate
 * @property string|null $InstanceProfileId
 * @property string|null $InstanceProfileName
 * @property string|null $Path
 * @property list<AwsIamInstanceProfileRole>|null $Roles
 */
class AwsIamInstanceProfile extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreateDate?: string|null,
     *     InstanceProfileId?: string|null,
     *     InstanceProfileName?: string|null,
     *     Path?: string|null,
     *     Roles?: list<AwsIamInstanceProfileRole>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
