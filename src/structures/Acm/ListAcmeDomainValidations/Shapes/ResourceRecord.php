<?php

namespace Sunaoka\Aws\Structures\Acm\ListAcmeDomainValidations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'CNAME' $Type
 * @property string $Value
 */
class ResourceRecord extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'CNAME',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
