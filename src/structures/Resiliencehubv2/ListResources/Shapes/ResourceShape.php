<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string|null $awsRegion
 * @property string|null $awsAccountId
 * @property string|null $resourceType
 * @property string|null $availabilityZoneId
 * @property string|null $availabilityZoneName
 * @property string|null $containmentParentId
 * @property string|null $logicalResourceGroupId
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     awsRegion?: string|null,
     *     awsAccountId?: string|null,
     *     resourceType?: string|null,
     *     availabilityZoneId?: string|null,
     *     availabilityZoneName?: string|null,
     *     containmentParentId?: string|null,
     *     logicalResourceGroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
