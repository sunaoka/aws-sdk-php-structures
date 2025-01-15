<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListObservabilityConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ObservabilityConfigurationName
 * @property bool|null $LatestOnly
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListObservabilityConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ObservabilityConfigurationName?: string|null,
     *     LatestOnly?: bool|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
