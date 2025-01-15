<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $AccessGrantId
 * @property string|null $AccessGrantArn
 * @property Grantee|null $Grantee
 * @property 'READ'|'WRITE'|'READWRITE'|null $Permission
 * @property string|null $AccessGrantsLocationId
 * @property AccessGrantsLocationConfiguration|null $AccessGrantsLocationConfiguration
 * @property string|null $GrantScope
 * @property string|null $ApplicationArn
 */
class ListAccessGrantEntry extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     AccessGrantId?: string|null,
     *     AccessGrantArn?: string|null,
     *     Grantee?: Grantee|null,
     *     Permission?: 'READ'|'WRITE'|'READWRITE'|null,
     *     AccessGrantsLocationId?: string|null,
     *     AccessGrantsLocationConfiguration?: AccessGrantsLocationConfiguration|null,
     *     GrantScope?: string|null,
     *     ApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
