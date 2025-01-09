<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListCommonControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\CommonControlFilter $CommonControlFilter
 */
class ListCommonControlsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     CommonControlFilter?: Shapes\CommonControlFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
