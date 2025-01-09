<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $dataSourceId
 * @property string $knowledgeBaseId
 * @property 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL' $status
 */
class DeleteDataSourceResponse extends Response
{
}
