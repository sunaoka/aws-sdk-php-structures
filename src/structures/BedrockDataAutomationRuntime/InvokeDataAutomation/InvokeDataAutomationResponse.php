<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\OutputConfiguration|null $outputConfiguration
 * @property 'DOCUMENT'|'IMAGE'|'AUDIO'|'VIDEO' $semanticModality
 * @property list<Shapes\OutputSegment>|null $outputSegments
 */
class InvokeDataAutomationResponse extends Response
{
}
