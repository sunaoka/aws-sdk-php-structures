<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataIntegrationIdentifier
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListDataIntegrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     DataIntegrationIdentifier: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
