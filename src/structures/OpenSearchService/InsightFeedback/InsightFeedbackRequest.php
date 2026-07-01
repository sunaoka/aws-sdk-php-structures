<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\InsightFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InsightFeedbackEntity $Entity
 * @property string $InsightId
 * @property 'Up'|'Down' $Thumbs
 * @property string|null $FeedbackText
 */
class InsightFeedbackRequest extends Request
{
    /**
     * @param array{
     *     Entity: Shapes\InsightFeedbackEntity,
     *     InsightId: string,
     *     Thumbs: 'Up'|'Down',
     *     FeedbackText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
