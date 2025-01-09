<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\IntentSummary> $recentIntentSummaryView
 * @property array<string, string> $sessionAttributes
 * @property string $sessionId
 * @property Shapes\DialogAction $dialogAction
 * @property list<Shapes\ActiveContext> $activeContexts
 */
class GetSessionResponse extends Response
{
}
