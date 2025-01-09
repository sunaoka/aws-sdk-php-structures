<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTrafficDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property bool $Enabled
 */
class SignInDistribution extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
