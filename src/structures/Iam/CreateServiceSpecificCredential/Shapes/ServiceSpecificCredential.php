<?php

namespace Sunaoka\Aws\Structures\Iam\CreateServiceSpecificCredential\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $ServiceName
 * @property string $ServiceUserName
 * @property string $ServicePassword
 * @property string $ServiceSpecificCredentialId
 * @property string $UserName
 * @property 'Active'|'Inactive' $Status
 */
class ServiceSpecificCredential extends Shape
{
    /**
     * @param array{
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     ServiceName: string,
     *     ServiceUserName: string,
     *     ServicePassword: string,
     *     ServiceSpecificCredentialId: string,
     *     UserName: string,
     *     Status: 'Active'|'Inactive'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
