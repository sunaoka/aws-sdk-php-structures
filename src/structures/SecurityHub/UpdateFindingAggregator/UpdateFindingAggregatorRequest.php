<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateFindingAggregator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FindingAggregatorArn
 * @property string $RegionLinkingMode
 * @property list<string> $Regions
 */
class UpdateFindingAggregatorRequest extends Request
{
    /**
     * @param array{
     *     FindingAggregatorArn: string,
     *     RegionLinkingMode: string,
     *     Regions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
