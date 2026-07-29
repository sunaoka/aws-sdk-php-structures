<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $queryStatement
 * @property string|null $clientToken
 * @property 'DEEP'|'QUICK'|null $searchType
 * @property Shapes\SearchFilters|null $searchFilters
 * @property string|null $groupId
 */
class StartSearchRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     queryStatement: string,
     *     clientToken?: string|null,
     *     searchType?: 'DEEP'|'QUICK'|null,
     *     searchFilters?: Shapes\SearchFilters|null,
     *     groupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
