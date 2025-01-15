<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListDistributionConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $filters
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListDistributionConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
