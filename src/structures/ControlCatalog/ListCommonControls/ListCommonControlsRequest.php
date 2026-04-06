<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListCommonControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\CommonControlFilter|null $CommonControlFilter
 */
class ListCommonControlsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     CommonControlFilter?: Shapes\CommonControlFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
