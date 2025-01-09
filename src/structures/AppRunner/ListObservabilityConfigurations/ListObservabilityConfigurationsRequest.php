<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListObservabilityConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ObservabilityConfigurationName
 * @property bool $LatestOnly
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListObservabilityConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     ObservabilityConfigurationName?: string,
     *     LatestOnly?: bool,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
