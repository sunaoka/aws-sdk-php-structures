<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\ListConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SERVER'|'PROCESS'|'CONNECTION'|'APPLICATION' $configurationType
 * @property list<Shapes\Filter>|null $filters
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\OrderByElement>|null $orderBy
 */
class ListConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     configurationType: 'SERVER'|'PROCESS'|'CONNECTION'|'APPLICATION',
     *     filters?: list<Shapes\Filter>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     orderBy?: list<Shapes\OrderByElement>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
