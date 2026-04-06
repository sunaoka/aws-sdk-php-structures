<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $AccessGrantsLocationId
 * @property Shapes\AccessGrantsLocationConfiguration|null $AccessGrantsLocationConfiguration
 * @property Shapes\Grantee $Grantee
 * @property 'READ'|'WRITE'|'READWRITE' $Permission
 * @property string|null $ApplicationArn
 * @property 'Object'|null $S3PrefixType
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAccessGrantRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     AccessGrantsLocationId: string,
     *     AccessGrantsLocationConfiguration?: Shapes\AccessGrantsLocationConfiguration|null,
     *     Grantee: Shapes\Grantee,
     *     Permission: 'READ'|'WRITE'|'READWRITE',
     *     ApplicationArn?: string|null,
     *     S3PrefixType?: 'Object'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
