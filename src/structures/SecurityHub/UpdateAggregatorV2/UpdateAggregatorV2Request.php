<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateAggregatorV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AggregatorV2Arn
 * @property string $RegionLinkingMode
 * @property list<string>|null $LinkedRegions
 */
class UpdateAggregatorV2Request extends Request
{
    /**
     * @param array{
     *     AggregatorV2Arn: string,
     *     RegionLinkingMode: string,
     *     LinkedRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
