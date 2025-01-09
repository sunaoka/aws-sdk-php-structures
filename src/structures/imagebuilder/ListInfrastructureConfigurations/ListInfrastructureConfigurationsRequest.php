<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListInfrastructureConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListInfrastructureConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
