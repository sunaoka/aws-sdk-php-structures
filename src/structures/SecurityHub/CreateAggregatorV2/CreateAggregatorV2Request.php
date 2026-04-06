<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAggregatorV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegionLinkingMode
 * @property list<string>|null $LinkedRegions
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateAggregatorV2Request extends Request
{
    /**
     * @param array{
     *     RegionLinkingMode: string,
     *     LinkedRegions?: list<string>|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
