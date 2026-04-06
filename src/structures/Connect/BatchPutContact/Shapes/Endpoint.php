<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TELEPHONE_NUMBER'|'VOIP'|'CONTACT_FLOW'|null $Type
 * @property string|null $Address
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Type?: 'TELEPHONE_NUMBER'|'VOIP'|'CONTACT_FLOW'|null,
     *     Address?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
