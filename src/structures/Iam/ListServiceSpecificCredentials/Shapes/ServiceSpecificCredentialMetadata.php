<?php

namespace Sunaoka\Aws\Structures\Iam\ListServiceSpecificCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property 'Active'|'Inactive' $Status
 * @property string $ServiceUserName
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $ServiceSpecificCredentialId
 * @property string $ServiceName
 */
class ServiceSpecificCredentialMetadata extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     Status: 'Active'|'Inactive',
     *     ServiceUserName: string,
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     ServiceSpecificCredentialId: string,
     *     ServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
