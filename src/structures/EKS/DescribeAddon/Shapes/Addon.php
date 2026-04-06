<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $addonName
 * @property string|null $clusterName
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETE_FAILED'|'DEGRADED'|'UPDATE_FAILED'|null $status
 * @property string|null $addonVersion
 * @property AddonHealth|null $health
 * @property string|null $addonArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property string|null $serviceAccountRoleArn
 * @property array<string, string>|null $tags
 * @property string|null $publisher
 * @property string|null $owner
 * @property MarketplaceInformation|null $marketplaceInformation
 * @property string|null $configurationValues
 * @property list<string>|null $podIdentityAssociations
 */
class Addon extends Shape
{
    /**
     * @param array{
     *     addonName?: string|null,
     *     clusterName?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETE_FAILED'|'DEGRADED'|'UPDATE_FAILED'|null,
     *     addonVersion?: string|null,
     *     health?: AddonHealth|null,
     *     addonArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     serviceAccountRoleArn?: string|null,
     *     tags?: array<string, string>|null,
     *     publisher?: string|null,
     *     owner?: string|null,
     *     marketplaceInformation?: MarketplaceInformation|null,
     *     configurationValues?: string|null,
     *     podIdentityAssociations?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
