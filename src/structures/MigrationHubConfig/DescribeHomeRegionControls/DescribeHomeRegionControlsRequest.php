<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\DescribeHomeRegionControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ControlId
 * @property string|null $HomeRegion
 * @property Shapes\Target|null $Target
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeHomeRegionControlsRequest extends Request
{
    /**
     * @param array{
     *     ControlId?: string|null,
     *     HomeRegion?: string|null,
     *     Target?: Shapes\Target|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
