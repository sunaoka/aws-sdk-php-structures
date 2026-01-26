<?php

namespace Sunaoka\Aws\Structures\QConnect\PutFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $targetId
 * @property 'RECOMMENDATION'|'RESULT'|'MESSAGE' $targetType
 * @property Shapes\ContentFeedbackData $contentFeedback
 */
class PutFeedbackRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     targetId: string,
     *     targetType: 'RECOMMENDATION'|'RESULT'|'MESSAGE',
     *     contentFeedback: Shapes\ContentFeedbackData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
