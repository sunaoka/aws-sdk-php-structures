<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListDataIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
