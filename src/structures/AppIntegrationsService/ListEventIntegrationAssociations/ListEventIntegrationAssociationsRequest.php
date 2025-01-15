<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListEventIntegrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventIntegrationName
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListEventIntegrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     EventIntegrationName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
