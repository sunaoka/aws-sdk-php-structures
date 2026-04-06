<?php

namespace Sunaoka\Aws\Structures\Iam\CreateServiceSpecificCredential\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string $ServiceName
 * @property string|null $ServiceUserName
 * @property string|null $ServicePassword
 * @property string|null $ServiceCredentialAlias
 * @property string|null $ServiceCredentialSecret
 * @property string $ServiceSpecificCredentialId
 * @property string $UserName
 * @property 'Active'|'Inactive'|'Expired' $Status
 */
class ServiceSpecificCredential extends Shape
{
    /**
     * @param array{
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     ServiceName: string,
     *     ServiceUserName?: string|null,
     *     ServicePassword?: string|null,
     *     ServiceCredentialAlias?: string|null,
     *     ServiceCredentialSecret?: string|null,
     *     ServiceSpecificCredentialId: string,
     *     UserName: string,
     *     Status: 'Active'|'Inactive'|'Expired'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
