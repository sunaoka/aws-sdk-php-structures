<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendationLimitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseId
 * @property string|null $EngineName
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Impact
 * @property string|null $Type
 */
class Limitation extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string|null,
     *     EngineName?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Impact?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
