<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VerifiedAccessInstanceId
 * @property string|null $Description
 * @property list<VerifiedAccessTrustProviderCondensed>|null $VerifiedAccessTrustProviders
 * @property string|null $CreationTime
 * @property string|null $LastUpdatedTime
 * @property list<Tag>|null $Tags
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
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
