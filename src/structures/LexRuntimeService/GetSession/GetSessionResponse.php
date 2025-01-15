<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\IntentSummary>|null $recentIntentSummaryView
 * @property array<string, string>|null $sessionAttributes
 * @property string|null $sessionId
 * @property Shapes\DialogAction|null $dialogAction
 * @property list<Shapes\ActiveContext>|null $activeContexts
 */
class GetSessionResponse extends Response
{
}
