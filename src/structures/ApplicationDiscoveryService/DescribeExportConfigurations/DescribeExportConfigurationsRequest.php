<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeExportConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $exportIds
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeExportConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     exportIds?: list<string>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
