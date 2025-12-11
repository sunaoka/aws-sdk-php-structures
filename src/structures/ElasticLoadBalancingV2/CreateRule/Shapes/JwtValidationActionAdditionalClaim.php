<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'single-string'|'string-array'|'space-separated-values' $Format
 * @property string $Name
 * @property list<string> $Values
 */
class JwtValidationActionAdditionalClaim extends Shape
{
    /**
     * @param array{
     *     Format: 'single-string'|'string-array'|'space-separated-values',
     *     Name: string,
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
