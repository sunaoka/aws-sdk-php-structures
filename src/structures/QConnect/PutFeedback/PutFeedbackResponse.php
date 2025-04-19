<?php

namespace Sunaoka\Aws\Structures\QConnect\PutFeedback;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assistantId
 * @property string $assistantArn
 * @property string $targetId
 * @property 'RECOMMENDATION'|'RESULT' $targetType
 * @property Shapes\ContentFeedbackData $contentFeedback
 */
class PutFeedbackResponse extends Response
{
}
