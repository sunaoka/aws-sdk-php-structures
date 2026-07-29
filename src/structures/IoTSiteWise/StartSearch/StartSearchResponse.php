<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartSearch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $searchId
 * @property string $workspaceName
 * @property 'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED' $status
 * @property string|null $groupId
 */
class StartSearchResponse extends Response
{
}
