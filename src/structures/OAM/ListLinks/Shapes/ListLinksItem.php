<?php

namespace Sunaoka\Aws\Structures\OAM\ListLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Label
 * @property list<string> $ResourceTypes
 * @property string $SinkArn
 */
class ListLinksItem extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Label?: string,
     *     ResourceTypes?: list<string>,
     *     SinkArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
