<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property 'ASC'|'DESC' $Value
 */
class Sort extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
