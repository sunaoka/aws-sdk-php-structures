<?php

namespace Sunaoka\Aws\Structures\APIPortal\PutDiscoveryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'API_GATEWAY'|'ELB'|'CLOUDFRONT'>|null $discoverySources
 * @property list<string>|null $excludedResources
 * @property list<'AI_DISCOVERY'>|null $features
 * @property array<string, string>|null $tags
 */
class PutDiscoveryConfigurationRequest extends Request
{
    /**
     * @param array{
     *     discoverySources?: list<'API_GATEWAY'|'ELB'|'CLOUDFRONT'>|null,
     *     excludedResources?: list<string>|null,
     *     features?: list<'AI_DISCOVERY'>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
