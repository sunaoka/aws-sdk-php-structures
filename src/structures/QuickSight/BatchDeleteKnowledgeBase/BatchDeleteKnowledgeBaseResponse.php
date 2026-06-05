<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeleteKnowledgeBase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BatchDeleteKnowledgeBaseSuccess> $Deleted
 * @property list<Shapes\BatchDeleteKnowledgeBaseFailure> $Errors
 * @property string|null $RequestId
 * @property int|null $Status
 */
class BatchDeleteKnowledgeBaseResponse extends Response
{
}
