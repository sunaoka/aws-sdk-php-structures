<?php

namespace Sunaoka\Aws\Structures\Acm\CreateAcmeExternalAccountBinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $Value
 * @property 'MINUTES'|'HOURS'|'DAYS' $Type
 */
class Expiration extends Shape
{
    /**
     * @param array{
     *     Value: int<1, max>,
     *     Type: 'MINUTES'|'HOURS'|'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
