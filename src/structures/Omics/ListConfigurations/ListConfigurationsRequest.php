<?php

namespace Sunaoka\Aws\Structures\Omics\ListConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10>|null $maxResults
 * @property string|null $startingToken
 */
class ListConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 10>|null,
     *     startingToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
