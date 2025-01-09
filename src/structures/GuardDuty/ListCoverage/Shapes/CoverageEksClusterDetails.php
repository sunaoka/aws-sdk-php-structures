<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterName
 * @property int $CoveredNodes
 * @property int $CompatibleNodes
 * @property AddonDetails $AddonDetails
 * @property 'AUTO_MANAGED'|'MANUAL'|'DISABLED' $ManagementType
 */
class CoverageEksClusterDetails extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string,
     *     CoveredNodes?: int,
     *     CompatibleNodes?: int,
     *     AddonDetails?: AddonDetails,
     *     ManagementType?: 'AUTO_MANAGED'|'MANUAL'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
