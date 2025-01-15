<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeContinuousExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $exportIds
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeContinuousExportsRequest extends Request
{
    /**
     * @param array{
     *     exportIds?: list<string>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
