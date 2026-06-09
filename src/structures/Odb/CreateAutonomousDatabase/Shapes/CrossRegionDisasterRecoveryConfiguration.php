<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceAutonomousDatabaseArn
 * @property 'ADG'|'BACKUP_BASED' $remoteDisasterRecoveryType
 * @property bool|null $isReplicateAutomaticBackups
 */
class CrossRegionDisasterRecoveryConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceAutonomousDatabaseArn: string,
     *     remoteDisasterRecoveryType: 'ADG'|'BACKUP_BASED',
     *     isReplicateAutomaticBackups?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
