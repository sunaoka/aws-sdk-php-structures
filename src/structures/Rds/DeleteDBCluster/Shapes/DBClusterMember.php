<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBInstanceIdentifier
 * @property bool|null $IsClusterWriter
 * @property string|null $DBClusterParameterGroupStatus
 * @property int|null $PromotionTier
 */
class DBClusterMember extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string|null,
     *     IsClusterWriter?: bool|null,
     *     DBClusterParameterGroupStatus?: string|null,
     *     PromotionTier?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
