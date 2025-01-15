<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Realm
 * @property string $KdcAdminPassword
 * @property string|null $CrossRealmTrustPrincipalPassword
 * @property string|null $ADDomainJoinUser
 * @property string|null $ADDomainJoinPassword
 */
class KerberosAttributes extends Shape
{
    /**
     * @param array{
     *     Realm: string,
     *     KdcAdminPassword: string,
     *     CrossRealmTrustPrincipalPassword?: string|null,
     *     ADDomainJoinUser?: string|null,
     *     ADDomainJoinPassword?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
