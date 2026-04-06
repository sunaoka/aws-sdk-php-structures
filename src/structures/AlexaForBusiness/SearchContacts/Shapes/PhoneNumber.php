<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Number
 * @property 'MOBILE'|'WORK'|'HOME' $Type
 */
class PhoneNumber extends Shape
{
    /**
     * @param array{
     *     Number: string,
     *     Type: 'MOBILE'|'WORK'|'HOME'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
