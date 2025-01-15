<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetUpgradeStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PRE_UPGRADE_CHECK'|'SNAPSHOT'|'UPGRADE'|null $UpgradeStep
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED'|null $StepStatus
 * @property string|null $UpgradeName
 */
class GetUpgradeStatusResponse extends Response
{
}
