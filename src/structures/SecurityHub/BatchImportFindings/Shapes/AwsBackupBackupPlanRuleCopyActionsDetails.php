<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationBackupVaultArn
 * @property AwsBackupBackupPlanLifecycleDetails $Lifecycle
 */
class AwsBackupBackupPlanRuleCopyActionsDetails extends Shape
{
    /**
     * @param array{
     *     DestinationBackupVaultArn?: string,
     *     Lifecycle?: AwsBackupBackupPlanLifecycleDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
