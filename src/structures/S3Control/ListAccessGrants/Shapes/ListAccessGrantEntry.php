<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $AccessGrantId
 * @property string $AccessGrantArn
 * @property Grantee $Grantee
 * @property 'READ'|'WRITE'|'READWRITE' $Permission
 * @property string $AccessGrantsLocationId
 * @property AccessGrantsLocationConfiguration $AccessGrantsLocationConfiguration
 * @property string $GrantScope
 * @property string $ApplicationArn
 */
class ListAccessGrantEntry extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     AccessGrantId?: string,
     *     AccessGrantArn?: string,
     *     Grantee?: Grantee,
     *     Permission?: 'READ'|'WRITE'|'READWRITE',
     *     AccessGrantsLocationId?: string,
     *     AccessGrantsLocationConfiguration?: AccessGrantsLocationConfiguration,
     *     GrantScope?: string,
     *     ApplicationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
