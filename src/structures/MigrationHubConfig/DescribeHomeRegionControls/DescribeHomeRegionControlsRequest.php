<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\DescribeHomeRegionControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ControlId
 * @property string $HomeRegion
 * @property Shapes\Target $Target
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeHomeRegionControlsRequest extends Request
{
    /**
     * @param array{
     *     ControlId?: string,
     *     HomeRegion?: string,
     *     Target?: Shapes\Target,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
