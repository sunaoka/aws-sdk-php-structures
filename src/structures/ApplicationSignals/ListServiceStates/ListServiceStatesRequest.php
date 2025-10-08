<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceStates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int<min, 250>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $IncludeLinkedAccounts
 * @property string|null $AwsAccountId
 * @property list<Shapes\AttributeFilter>|null $AttributeFilters
 */
class ListServiceStatesRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     MaxResults?: int<min, 250>|null,
     *     NextToken?: string|null,
     *     IncludeLinkedAccounts?: bool|null,
     *     AwsAccountId?: string|null,
     *     AttributeFilters?: list<Shapes\AttributeFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
