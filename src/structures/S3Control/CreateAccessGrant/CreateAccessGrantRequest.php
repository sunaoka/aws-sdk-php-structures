<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $AccessGrantsLocationId
 * @property Shapes\AccessGrantsLocationConfiguration $AccessGrantsLocationConfiguration
 * @property Shapes\Grantee $Grantee
 * @property 'READ'|'WRITE'|'READWRITE' $Permission
 * @property string $ApplicationArn
 * @property 'Object' $S3PrefixType
 * @property list<Shapes\Tag> $Tags
 */
class CreateAccessGrantRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     AccessGrantsLocationId: string,
     *     AccessGrantsLocationConfiguration?: Shapes\AccessGrantsLocationConfiguration,
     *     Grantee: Shapes\Grantee,
     *     Permission: 'READ'|'WRITE'|'READWRITE',
     *     ApplicationArn?: string,
     *     S3PrefixType?: 'Object',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
