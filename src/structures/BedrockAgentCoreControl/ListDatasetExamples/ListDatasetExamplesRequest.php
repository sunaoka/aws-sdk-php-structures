<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetExamples;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $datasetVersion
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListDatasetExamplesRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     datasetVersion?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
