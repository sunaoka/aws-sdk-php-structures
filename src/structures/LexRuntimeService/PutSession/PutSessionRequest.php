<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PutSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $userId
 * @property array<string, string>|null $sessionAttributes
 * @property Shapes\DialogAction|null $dialogAction
 * @property list<Shapes\IntentSummary>|null $recentIntentSummaryView
 * @property string|null $accept
 * @property list<Shapes\ActiveContext>|null $activeContexts
 */
class PutSessionRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
     *     userId: string,
     *     sessionAttributes?: array<string, string>|null,
     *     dialogAction?: Shapes\DialogAction|null,
     *     recentIntentSummaryView?: list<Shapes\IntentSummary>|null,
     *     accept?: string|null,
     *     activeContexts?: list<Shapes\ActiveContext>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
