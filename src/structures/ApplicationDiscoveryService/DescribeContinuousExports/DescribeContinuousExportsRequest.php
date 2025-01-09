<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeContinuousExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $exportIds
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class DescribeContinuousExportsRequest extends Request
{
    /**
     * @param array{
     *     exportIds?: list<string>,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
