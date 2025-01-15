<?php

namespace Sunaoka\Aws\Structures\OAM\ListLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Label
 * @property list<string>|null $ResourceTypes
 * @property string|null $SinkArn
 */
class ListLinksItem extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Label?: string|null,
     *     ResourceTypes?: list<string>|null,
     *     SinkArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
