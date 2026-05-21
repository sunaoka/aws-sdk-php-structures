<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteDatasetExamples;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $clientToken
 * @property list<string> $exampleIds
 */
class DeleteDatasetExamplesRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     clientToken?: string|null,
     *     exampleIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
