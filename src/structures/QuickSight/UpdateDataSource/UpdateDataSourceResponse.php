<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $DataSourceId
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $UpdateStatus
 * @property string $RequestId
 * @property int $Status
 */
class UpdateDataSourceResponse extends Response
{
}
