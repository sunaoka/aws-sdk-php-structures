<?php

namespace Sunaoka\Aws\Structures\Swf\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'REGISTERED'|'DEPRECATED' $status
 * @property string $description
 * @property string $arn
 */
class DomainInfo extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     status: 'REGISTERED'|'DEPRECATED',
     *     description?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
