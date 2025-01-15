<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateFindingAggregator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FindingAggregatorArn
 * @property string $RegionLinkingMode
 * @property list<string>|null $Regions
 */
class UpdateFindingAggregatorRequest extends Request
{
    /**
     * @param array{
     *     FindingAggregatorArn: string,
     *     RegionLinkingMode: string,
     *     Regions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
