<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Citation>|null $citations
 * @property 'INTERVENED'|'NONE'|null $guardrailAction
 * @property Shapes\RetrieveAndGenerateOutput $output
 * @property string $sessionId
 */
class RetrieveAndGenerateResponse extends Response
{
}
