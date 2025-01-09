<?php

namespace Sunaoka\Aws\Structures\DocDB\FailoverDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBInstanceIdentifier
 * @property bool $IsClusterWriter
 * @property string $DBClusterParameterGroupStatus
 * @property int $PromotionTier
 */
class DBClusterMember extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string,
     *     IsClusterWriter?: bool,
     *     DBClusterParameterGroupStatus?: string,
     *     PromotionTier?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
