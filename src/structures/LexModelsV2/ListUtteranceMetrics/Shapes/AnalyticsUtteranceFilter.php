<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel'|'SessionId'|'OriginatingRequestId'|'UtteranceState'|'UtteranceText' $name
 * @property 'EQ'|'GT'|'LT' $operator
 * @property list<string> $values
 */
class AnalyticsUtteranceFilter extends Shape
{
    /**
     * @param array{
     *     name: 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel'|'SessionId'|'OriginatingRequestId'|'UtteranceState'|'UtteranceText',
     *     operator: 'EQ'|'GT'|'LT',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
