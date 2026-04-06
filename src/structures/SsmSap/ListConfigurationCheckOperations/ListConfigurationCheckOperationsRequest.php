<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListConfigurationCheckOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property 'ALL_OPERATIONS'|'LATEST_PER_CHECK'|null $ListMode
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class ListConfigurationCheckOperationsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ListMode?: 'ALL_OPERATIONS'|'LATEST_PER_CHECK'|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
