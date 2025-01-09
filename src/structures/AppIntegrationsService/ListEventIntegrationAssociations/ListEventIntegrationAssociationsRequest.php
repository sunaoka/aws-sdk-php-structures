<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListEventIntegrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventIntegrationName
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListEventIntegrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     EventIntegrationName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
