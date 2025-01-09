<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel'|'SessionId'|'OriginatingRequestId'|'IntentName'|'IntentStageName' $name
 * @property 'EQ'|'GT'|'LT' $operator
 * @property list<string> $values
 */
class AnalyticsIntentStageFilter extends Shape
{
    /**
     * @param array{
     *     name: 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel'|'SessionId'|'OriginatingRequestId'|'IntentName'|'IntentStageName',
     *     operator: 'EQ'|'GT'|'LT',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
