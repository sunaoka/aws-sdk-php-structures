<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListNotificationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListNotificationConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
