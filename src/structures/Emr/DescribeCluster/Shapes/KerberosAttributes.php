<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Realm
 * @property string $KdcAdminPassword
 * @property string $CrossRealmTrustPrincipalPassword
 * @property string $ADDomainJoinUser
 * @property string $ADDomainJoinPassword
 */
class KerberosAttributes extends Shape
{
    /**
     * @param array{
     *     Realm: string,
     *     KdcAdminPassword: string,
     *     CrossRealmTrustPrincipalPassword?: string,
     *     ADDomainJoinUser?: string,
     *     ADDomainJoinPassword?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
