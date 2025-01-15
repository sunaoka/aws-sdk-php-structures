<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectSentiment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED'|null $Sentiment
 * @property Shapes\SentimentScore|null $SentimentScore
 */
class DetectSentimentResponse extends Response
{
}
