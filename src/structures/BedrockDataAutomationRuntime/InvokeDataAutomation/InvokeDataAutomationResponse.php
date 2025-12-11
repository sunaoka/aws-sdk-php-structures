<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'DOCUMENT'|'IMAGE'|'AUDIO'|'VIDEO' $semanticModality
 * @property list<Shapes\OutputSegment> $outputSegments
 */
class InvokeDataAutomationResponse extends Response
{
}
