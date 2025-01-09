<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $addonName
 * @property string $clusterName
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETE_FAILED'|'DEGRADED'|'UPDATE_FAILED' $status
 * @property string $addonVersion
 * @property AddonHealth $health
 * @property string $addonArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property string $serviceAccountRoleArn
 * @property array<string, string> $tags
 * @property string $publisher
 * @property string $owner
 * @property MarketplaceInformation $marketplaceInformation
 * @property string $configurationValues
 * @property list<string> $podIdentityAssociations
 */
class Addon extends Shape
{
    /**
     * @param array{
     *     addonName?: string,
     *     clusterName?: string,
     *     status?: 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETE_FAILED'|'DEGRADED'|'UPDATE_FAILED',
     *     addonVersion?: string,
     *     health?: AddonHealth,
     *     addonArn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult,
     *     serviceAccountRoleArn?: string,
     *     tags?: array<string, string>,
     *     publisher?: string,
     *     owner?: string,
     *     marketplaceInformation?: MarketplaceInformation,
     *     configurationValues?: string,
     *     podIdentityAssociations?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
