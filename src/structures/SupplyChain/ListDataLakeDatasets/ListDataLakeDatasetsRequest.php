<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataLakeDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $namespace
 * @property string|null $nextToken
 * @property int<0, 20>|null $maxResults
 */
class ListDataLakeDatasetsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     namespace: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
