<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactConversationalAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LanguageConfiguration $LanguageConfiguration
 * @property RedactionConfiguration $RedactionConfiguration
 * @property SentimentConfiguration $SentimentConfiguration
 * @property SummaryConfiguration $SummaryConfiguration
 * @property RulesConfiguration $RulesConfiguration
 */
class AnalyticsConfiguration extends Shape
{
    /**
     * @param array{
     *     LanguageConfiguration: LanguageConfiguration,
     *     RedactionConfiguration: RedactionConfiguration,
     *     SentimentConfiguration: SentimentConfiguration,
     *     SummaryConfiguration: SummaryConfiguration,
     *     RulesConfiguration: RulesConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
