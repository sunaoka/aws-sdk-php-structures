<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OVERALL_CUSTOMER_SENTIMENT_SCORE'|'OVERALL_AGENT_SENTIMENT_SCORE'|'NON_TALK_TIME'|'NON_TALK_TIME_PERCENTAGE'|'NUMBER_OF_INTERRUPTIONS'|'CONTACT_DURATION'|'AGENT_INTERACTION_DURATION'|'CUSTOMER_HOLD_TIME' $Label
 */
class NumericQuestionPropertyValueAutomation extends Shape
{
    /**
     * @param array{Label: 'OVERALL_CUSTOMER_SENTIMENT_SCORE'|'OVERALL_AGENT_SENTIMENT_SCORE'|'NON_TALK_TIME'|'NON_TALK_TIME_PERCENTAGE'|'NUMBER_OF_INTERRUPTIONS'|'CONTACT_DURATION'|'AGENT_INTERACTION_DURATION'|'CUSTOMER_HOLD_TIME'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
