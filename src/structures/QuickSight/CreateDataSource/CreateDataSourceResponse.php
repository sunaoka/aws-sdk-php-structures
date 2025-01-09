<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $DataSourceId
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $CreationStatus
 * @property string $RequestId
 * @property int $Status
 */
class CreateDataSourceResponse extends Response
{
}
