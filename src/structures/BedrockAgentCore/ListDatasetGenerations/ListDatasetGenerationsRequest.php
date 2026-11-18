<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListDatasetGenerations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDatasetGenerationsRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
