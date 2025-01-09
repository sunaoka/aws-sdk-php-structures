<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataLakeDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $namespace
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDataLakeDatasetsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     namespace: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
