<?php

namespace Sunaoka\Aws\Structures\APIPortal\PutOrganizationDiscoveryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'API_GATEWAY'|'ELB'|'CLOUDFRONT'>|null $discoverySources
 * @property Shapes\DiscoveryExclusionFilters|null $exclusionFilters
 * @property Shapes\OrganizationDiscoveryFilters|null $discoveryFilters
 * @property list<'AI_DISCOVERY'>|null $features
 * @property array<string, string>|null $tags
 */
class PutOrganizationDiscoveryConfigurationRequest extends Request
{
    /**
     * @param array{
     *     discoverySources?: list<'API_GATEWAY'|'ELB'|'CLOUDFRONT'>|null,
     *     exclusionFilters?: Shapes\DiscoveryExclusionFilters|null,
     *     discoveryFilters?: Shapes\OrganizationDiscoveryFilters|null,
     *     features?: list<'AI_DISCOVERY'>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
