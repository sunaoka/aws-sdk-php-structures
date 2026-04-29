<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListConfigurationBundleVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bundleId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property Shapes\VersionFilter|null $filter
 */
class ListConfigurationBundleVersionsRequest extends Request
{
    /**
     * @param array{
     *     bundleId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     filter?: Shapes\VersionFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
