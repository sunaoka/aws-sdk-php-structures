<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateKnowledgeBase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KnowledgeBaseArn
 * @property string $KnowledgeBaseId
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'FAILED'|'DELETING' $CreationStatus
 * @property string|null $RequestId
 * @property int|null $Status
 */
class CreateKnowledgeBaseResponse extends Response
{
}
