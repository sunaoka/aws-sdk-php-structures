<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel'|'Duration'|'ConversationEndState'|'SessionId'|'OriginatingRequestId'|'IntentPath' $name
 * @property 'EQ'|'GT'|'LT' $operator
 * @property list<string> $values
 */
class AnalyticsSessionFilter extends Shape
{
    /**
     * @param array{
     *     name: 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel'|'Duration'|'ConversationEndState'|'SessionId'|'OriginatingRequestId'|'IntentPath',
     *     operator: 'EQ'|'GT'|'LT',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
