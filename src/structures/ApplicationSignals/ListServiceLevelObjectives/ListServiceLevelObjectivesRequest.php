<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $KeyAttributes
 * @property string $OperationName
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListServiceLevelObjectivesRequest extends Request
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>,
     *     OperationName?: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
