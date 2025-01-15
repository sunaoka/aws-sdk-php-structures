<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationBackupVaultArn
 * @property AwsBackupBackupPlanLifecycleDetails|null $Lifecycle
 */
class AwsBackupBackupPlanRuleCopyActionsDetails extends Shape
{
    /**
     * @param array{
     *     DestinationBackupVaultArn?: string|null,
     *     Lifecycle?: AwsBackupBackupPlanLifecycleDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
