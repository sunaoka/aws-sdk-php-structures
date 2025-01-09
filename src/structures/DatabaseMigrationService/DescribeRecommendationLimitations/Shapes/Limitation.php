<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendationLimitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseId
 * @property string $EngineName
 * @property string $Name
 * @property string $Description
 * @property string $Impact
 * @property string $Type
 */
class Limitation extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string,
     *     EngineName?: string,
     *     Name?: string,
     *     Description?: string,
     *     Impact?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
