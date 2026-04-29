<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetEvaluator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $evaluatorId
 * @property 'ALL_DATA'|'METADATA_ONLY'|null $includedData
 */
class GetEvaluatorRequest extends Request
{
    /**
     * @param array{
     *     evaluatorId: string,
     *     includedData?: 'ALL_DATA'|'METADATA_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
