<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectSentiment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED' $Sentiment
 * @property Shapes\SentimentScore $SentimentScore
 */
class DetectSentimentResponse extends Response
{
}
