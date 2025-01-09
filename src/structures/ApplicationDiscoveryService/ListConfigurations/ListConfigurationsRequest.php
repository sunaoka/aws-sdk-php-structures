<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\ListConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SERVER'|'PROCESS'|'CONNECTION'|'APPLICATION' $configurationType
 * @property list<Shapes\Filter> $filters
 * @property int $maxResults
 * @property string $nextToken
 * @property list<Shapes\OrderByElement> $orderBy
 */
class ListConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     configurationType: 'SERVER'|'PROCESS'|'CONNECTION'|'APPLICATION',
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int,
     *     nextToken?: string,
     *     orderBy?: list<Shapes\OrderByElement>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
