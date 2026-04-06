<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlowModules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\ContactFlowModuleSearchFilter|null $SearchFilter
 * @property Shapes\ContactFlowModuleSearchCriteria|null $SearchCriteria
 */
class SearchContactFlowModulesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\ContactFlowModuleSearchFilter|null,
     *     SearchCriteria?: Shapes\ContactFlowModuleSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
