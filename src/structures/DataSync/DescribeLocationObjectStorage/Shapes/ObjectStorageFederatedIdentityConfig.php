<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationObjectStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AwsIamRole
 * @property ObjectStorageExternalIdentityConfig|null $ExternalIdentity
 */
class ObjectStorageFederatedIdentityConfig extends Shape
{
    /**
     * @param array{
     *     AwsIamRole?: string|null,
     *     ExternalIdentity?: ObjectStorageExternalIdentityConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
