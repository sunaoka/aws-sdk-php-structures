<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeExportConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $exportIds
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeExportConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     exportIds?: list<string>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
