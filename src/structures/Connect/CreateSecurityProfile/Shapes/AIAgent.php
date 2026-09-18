<?php

namespace Sunaoka\Aws\Structures\Connect\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property 'THIRD_PARTY'|null $Type
 */
class AIAgent extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Type?: 'THIRD_PARTY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
