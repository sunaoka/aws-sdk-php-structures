<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorIdentifier
 * @property Shapes\ConnectorQuery $Selector
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourcesByConnectorRequest extends Request
{
    /**
     * @param array{
     *     ConnectorIdentifier: string,
     *     Selector: Shapes\ConnectorQuery,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
