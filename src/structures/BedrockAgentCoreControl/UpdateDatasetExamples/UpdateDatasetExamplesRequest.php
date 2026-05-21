<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateDatasetExamples;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string|null $clientToken
 * @property list<Shapes\SensitiveJson> $examples
 */
class UpdateDatasetExamplesRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     clientToken?: string|null,
     *     examples: list<Shapes\SensitiveJson>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
