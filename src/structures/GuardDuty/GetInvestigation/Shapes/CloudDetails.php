<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS' $Provider
 * @property string $Region
 * @property string $Account
 */
class CloudDetails extends Shape
{
    /**
     * @param array{
     *     Provider: 'AWS',
     *     Region: string,
     *     Account: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
