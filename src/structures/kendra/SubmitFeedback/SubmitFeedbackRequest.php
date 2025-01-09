<?php

namespace Sunaoka\Aws\Structures\kendra\SubmitFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $QueryId
 * @property list<Shapes\ClickFeedback> $ClickFeedbackItems
 * @property list<Shapes\RelevanceFeedback> $RelevanceFeedbackItems
 */
class SubmitFeedbackRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     QueryId: string,
     *     ClickFeedbackItems?: list<Shapes\ClickFeedback>,
     *     RelevanceFeedbackItems?: list<Shapes\RelevanceFeedback>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
