<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ConnectorFilterCriteria|null $filterCriteria
 */
class ListConnectorsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     filterCriteria?: Shapes\ConnectorFilterCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
