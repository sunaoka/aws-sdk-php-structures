<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsClusterWriter
 * @property int $PromotionTier
 * @property string $DbInstanceIdentifier
 * @property string $DbClusterParameterGroupStatus
 */
class AwsRdsDbClusterMember extends Shape
{
    /**
     * @param array{
     *     IsClusterWriter?: bool,
     *     PromotionTier?: int,
     *     DbInstanceIdentifier?: string,
     *     DbClusterParameterGroupStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
