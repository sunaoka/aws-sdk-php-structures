<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterName
 * @property int|null $CoveredNodes
 * @property int|null $CompatibleNodes
 * @property AddonDetails|null $AddonDetails
 * @property 'AUTO_MANAGED'|'MANUAL'|'DISABLED'|null $ManagementType
 */
class CoverageEksClusterDetails extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string|null,
     *     CoveredNodes?: int|null,
     *     CompatibleNodes?: int|null,
     *     AddonDetails?: AddonDetails|null,
     *     ManagementType?: 'AUTO_MANAGED'|'MANUAL'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
