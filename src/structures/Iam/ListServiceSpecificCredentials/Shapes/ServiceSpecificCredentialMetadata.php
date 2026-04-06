<?php

namespace Sunaoka\Aws\Structures\Iam\ListServiceSpecificCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property 'Active'|'Inactive'|'Expired' $Status
 * @property string|null $ServiceUserName
 * @property string|null $ServiceCredentialAlias
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string $ServiceSpecificCredentialId
 * @property string $ServiceName
 */
class ServiceSpecificCredentialMetadata extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     Status: 'Active'|'Inactive'|'Expired',
     *     ServiceUserName?: string|null,
     *     ServiceCredentialAlias?: string|null,
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     ServiceSpecificCredentialId: string,
     *     ServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
