<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel'|'SessionId'|'OriginatingRequestId'|'IntentName'|'IntentEndState' $name
 * @property 'EQ'|'GT'|'LT' $operator
 * @property list<string> $values
 */
class AnalyticsIntentFilter extends Shape
{
    /**
     * @param array{
     *     name: 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel'|'SessionId'|'OriginatingRequestId'|'IntentName'|'IntentEndState',
     *     operator: 'EQ'|'GT'|'LT',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
