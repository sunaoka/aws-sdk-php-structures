<?php

namespace Sunaoka\Aws\Structures\Connect\SearchTestCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\TestCaseSearchFilter|null $SearchFilter
 * @property Shapes\TestCaseSearchCriteria|null $SearchCriteria
 */
class SearchTestCasesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\TestCaseSearchFilter|null,
     *     SearchCriteria?: Shapes\TestCaseSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
