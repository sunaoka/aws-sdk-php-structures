<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListEventIntegrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventIntegrationName
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListEventIntegrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     EventIntegrationName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
