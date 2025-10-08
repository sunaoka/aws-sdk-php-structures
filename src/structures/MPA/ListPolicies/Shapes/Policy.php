<?php

namespace Sunaoka\Aws\Structures\MPA\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property int<1, max> $DefaultVersion
 * @property 'AWS_MANAGED'|'AWS_RAM' $PolicyType
 * @property string $Name
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     DefaultVersion: int<1, max>,
     *     PolicyType: 'AWS_MANAGED'|'AWS_RAM',
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
