<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListSnapshotCopyConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $namespaceName
 * @property string $nextToken
 */
class ListSnapshotCopyConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     namespaceName?: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
