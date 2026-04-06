<?php

namespace Sunaoka\Aws\Structures\QConnect\PutFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property Shapes\ContentFeedbackData $contentFeedback
 * @property string $targetId
 * @property 'RECOMMENDATION'|'RESULT' $targetType
 */
class PutFeedbackRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     contentFeedback: Shapes\ContentFeedbackData,
     *     targetId: string,
     *     targetType: 'RECOMMENDATION'|'RESULT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
