<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $LanguageLocale
 * @property list<string>|null $LanguageLocales
 * @property ContactLensChannelConfiguration|null $ChannelConfiguration
 * @property ContactLensRedactionConfiguration|null $RedactionConfiguration
 * @property ContactLensSummaryConfiguration|null $SummaryConfiguration
 * @property ContactLensSentimentConfiguration|null $SentimentConfiguration
 */
class ConversationalAnalyticsConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     LanguageLocale?: string|null,
     *     LanguageLocales?: list<string>|null,
     *     ChannelConfiguration?: ContactLensChannelConfiguration|null,
     *     RedactionConfiguration?: ContactLensRedactionConfiguration|null,
     *     SummaryConfiguration?: ContactLensSummaryConfiguration|null,
     *     SentimentConfiguration?: ContactLensSentimentConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
