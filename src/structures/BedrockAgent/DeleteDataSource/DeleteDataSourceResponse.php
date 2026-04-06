<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL' $status
 */
class DeleteDataSourceResponse extends Response
{
}
