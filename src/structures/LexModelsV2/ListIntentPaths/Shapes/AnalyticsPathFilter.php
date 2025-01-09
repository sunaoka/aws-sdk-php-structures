<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentPaths\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel' $name
 * @property 'EQ'|'GT'|'LT' $operator
 * @property list<string> $values
 */
class AnalyticsPathFilter extends Shape
{
    /**
     * @param array{
     *     name: 'BotAliasId'|'BotVersion'|'LocaleId'|'Modality'|'Channel',
     *     operator: 'EQ'|'GT'|'LT',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
