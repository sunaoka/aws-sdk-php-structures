<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\KnowledgeBaseRetrievalResult> $retrievalResults
 * @property 'INTERVENED'|'NONE'|null $guardrailAction
 * @property string|null $nextToken
 */
class RetrieveResponse extends Response
{
}
