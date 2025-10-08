<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListConnectorDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CloudConnectorId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListConnectorDestinationsRequest extends Request
{
    /**
     * @param array{
     *     CloudConnectorId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
