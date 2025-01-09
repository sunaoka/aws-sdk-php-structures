<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlowModules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\ContactFlowModuleSearchFilter $SearchFilter
 * @property Shapes\ContactFlowModuleSearchCriteria $SearchCriteria
 */
class SearchContactFlowModulesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SearchFilter?: Shapes\ContactFlowModuleSearchFilter,
     *     SearchCriteria?: Shapes\ContactFlowModuleSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
