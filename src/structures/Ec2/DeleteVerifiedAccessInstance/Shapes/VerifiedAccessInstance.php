<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VerifiedAccessInstanceId
 * @property string|null $Description
 * @property list<VerifiedAccessTrustProviderCondensed>|null $VerifiedAccessTrustProviders
 * @property string|null $CreationTime
 * @property string|null $LastUpdatedTime
 * @property list<Tag>|null $Tags
 * @property bool|null $FipsEnabled
 * @property VerifiedAccessInstanceCustomSubDomain|null $CidrEndpointsCustomSubDomain
 */
class VerifiedAccessInstance extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId?: string|null,
     *     Description?: string|null,
     *     VerifiedAccessTrustProviders?: list<VerifiedAccessTrustProviderCondensed>|null,
     *     CreationTime?: string|null,
     *     LastUpdatedTime?: string|null,
     *     Tags?: list<Tag>|null,
     *     FipsEnabled?: bool|null,
     *     CidrEndpointsCustomSubDomain?: VerifiedAccessInstanceCustomSubDomain|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
