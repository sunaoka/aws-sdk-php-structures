<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ToKey
 * @property list<string> $FromPath
 * @property string $FromType
 * @property string $ToType
 * @property bool $Dropped
 * @property list<Mapping> $Children
 */
class Mapping extends Shape
{
    /**
     * @param array{
     *     ToKey?: string,
     *     FromPath?: list<string>,
     *     FromType?: string,
     *     ToType?: string,
     *     Dropped?: bool,
     *     Children?: list<Mapping>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
