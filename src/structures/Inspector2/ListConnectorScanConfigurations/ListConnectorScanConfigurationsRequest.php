<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectorScanConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $awsConfigConnectorArns
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListConnectorScanConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     awsConfigConnectorArns?: list<string>|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
