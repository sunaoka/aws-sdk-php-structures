<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListAccountAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ConnectorDestinationId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAccountAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ConnectorDestinationId?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
