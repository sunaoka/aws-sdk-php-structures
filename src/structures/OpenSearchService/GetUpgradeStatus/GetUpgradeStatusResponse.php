<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetUpgradeStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PRE_UPGRADE_CHECK'|'SNAPSHOT'|'UPGRADE' $UpgradeStep
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED' $StepStatus
 * @property string $UpgradeName
 */
class GetUpgradeStatusResponse extends Response
{
}
