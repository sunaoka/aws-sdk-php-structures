<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateFindingAggregator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegionLinkingMode
 * @property list<string> $Regions
 */
class CreateFindingAggregatorRequest extends Request
{
    /**
     * @param array{
     *     RegionLinkingMode: string,
     *     Regions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
