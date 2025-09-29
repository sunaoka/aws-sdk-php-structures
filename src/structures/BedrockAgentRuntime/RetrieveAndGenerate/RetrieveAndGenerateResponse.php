<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property Shapes\RetrieveAndGenerateOutput $output
 * @property list<Shapes\Citation>|null $citations
 * @property 'INTERVENED'|'NONE'|null $guardrailAction
 */
class RetrieveAndGenerateResponse extends Response
{
}
