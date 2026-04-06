<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property 'WORK' $Type
 */
class SipAddress extends Shape
{
    /**
     * @param array{
     *     Uri: string,
     *     Type: 'WORK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
