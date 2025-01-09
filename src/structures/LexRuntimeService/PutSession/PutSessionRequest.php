<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PutSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $userId
 * @property array<string, string> $sessionAttributes
 * @property Shapes\DialogAction $dialogAction
 * @property list<Shapes\IntentSummary> $recentIntentSummaryView
 * @property string $accept
 * @property list<Shapes\ActiveContext> $activeContexts
 */
class PutSessionRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
     *     userId: string,
     *     sessionAttributes?: array<string, string>,
     *     dialogAction?: Shapes\DialogAction,
     *     recentIntentSummaryView?: list<Shapes\IntentSummary>,
     *     accept?: string,
     *     activeContexts?: list<Shapes\ActiveContext>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
