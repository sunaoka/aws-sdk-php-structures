<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VerifiedAccessInstanceId
 * @property string $Description
 * @property list<VerifiedAccessTrustProviderCondensed> $VerifiedAccessTrustProviders
 * @property string $CreationTime
 * @property string $LastUpdatedTime
 * @property list<Tag> $Tags
 * @property bool $FipsEnabled
 * @property VerifiedAccessInstanceCustomSubDomain $CidrEndpointsCustomSubDomain
 */
class VerifiedAccessInstance extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId?: string,
     *     Description?: string,
     *     VerifiedAccessTrustProviders?: list<VerifiedAccessTrustProviderCondensed>,
     *     CreationTime?: string,
     *     LastUpdatedTime?: string,
     *     Tags?: list<Tag>,
     *     FipsEnabled?: bool,
     *     CidrEndpointsCustomSubDomain?: VerifiedAccessInstanceCustomSubDomain
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
