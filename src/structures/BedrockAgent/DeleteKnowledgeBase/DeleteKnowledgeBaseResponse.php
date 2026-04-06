<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteKnowledgeBase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $knowledgeBaseId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL' $status
 */
class DeleteKnowledgeBaseResponse extends Response
{
}
