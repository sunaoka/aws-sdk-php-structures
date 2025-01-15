<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $DataSourceId
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $CreationStatus
 * @property string|null $RequestId
 * @property int|null $Status
 */
class CreateDataSourceResponse extends Response
{
}
