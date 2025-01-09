<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListInfrastructureConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $filters
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 */
class ListInfrastructureConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int<1, 25>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
