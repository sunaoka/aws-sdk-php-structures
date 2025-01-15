<?php

namespace Sunaoka\Aws\Structures\Iam\CreateAccessKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $AccessKeyId
 * @property 'Active'|'Inactive' $Status
 * @property string $SecretAccessKey
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 */
class AccessKey extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     AccessKeyId: string,
     *     Status: 'Active'|'Inactive',
     *     SecretAccessKey: string,
     *     CreateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
