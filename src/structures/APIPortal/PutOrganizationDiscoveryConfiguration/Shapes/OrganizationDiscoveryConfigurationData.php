<?php

namespace Sunaoka\Aws\Structures\APIPortal\PutOrganizationDiscoveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'DISABLED'|'ENABLED'|'UPDATING'|null $status
 * @property list<'API_GATEWAY'|'ELB'|'CLOUDFRONT'>|null $discoverySources
 * @property DiscoveryExclusionFilters|null $exclusionFilters
 * @property OrganizationDiscoveryFilters|null $discoveryFilters
 * @property list<'AI_DISCOVERY'>|null $features
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class OrganizationDiscoveryConfigurationData extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     status?: 'DISABLED'|'ENABLED'|'UPDATING'|null,
     *     discoverySources?: list<'API_GATEWAY'|'ELB'|'CLOUDFRONT'>|null,
     *     exclusionFilters?: DiscoveryExclusionFilters|null,
     *     discoveryFilters?: OrganizationDiscoveryFilters|null,
     *     features?: list<'AI_DISCOVERY'>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
