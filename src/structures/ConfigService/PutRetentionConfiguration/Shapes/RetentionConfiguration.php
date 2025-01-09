<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRetentionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $RetentionPeriodInDays
 */
class RetentionConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     RetentionPeriodInDays: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
