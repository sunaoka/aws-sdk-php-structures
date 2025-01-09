<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataIntegrationIdentifier
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListDataIntegrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     DataIntegrationIdentifier: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
