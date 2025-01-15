<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'REGISTERED'|'DEPRECATED' $status
 * @property string|null $description
 * @property string|null $arn
 */
class DomainInfo extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     status: 'REGISTERED'|'DEPRECATED',
     *     description?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
