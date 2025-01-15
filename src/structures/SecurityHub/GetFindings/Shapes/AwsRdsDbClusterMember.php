<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsClusterWriter
 * @property int|null $PromotionTier
 * @property string|null $DbInstanceIdentifier
 * @property string|null $DbClusterParameterGroupStatus
 */
class AwsRdsDbClusterMember extends Shape
{
    /**
     * @param array{
     *     IsClusterWriter?: bool|null,
     *     PromotionTier?: int|null,
     *     DbInstanceIdentifier?: string|null,
     *     DbClusterParameterGroupStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
