<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'INTERVENED'|'NONE' $guardrailAction
 * @property string $nextToken
 * @property list<Shapes\KnowledgeBaseRetrievalResult> $retrievalResults
 */
class RetrieveResponse extends Response
{
}
