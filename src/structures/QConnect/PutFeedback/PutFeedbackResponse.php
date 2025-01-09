<?php

namespace Sunaoka\Aws\Structures\QConnect\PutFeedback;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assistantArn
 * @property string $assistantId
 * @property Shapes\ContentFeedbackData $contentFeedback
 * @property string $targetId
 * @property 'RECOMMENDATION'|'RESULT' $targetType
 */
class PutFeedbackResponse extends Response
{
}
