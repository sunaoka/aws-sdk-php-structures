<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ToKey
 * @property list<string>|null $FromPath
 * @property string|null $FromType
 * @property string|null $ToType
 * @property bool|null $Dropped
 * @property list<Mapping>|null $Children
 */
class Mapping extends Shape
{
    /**
     * @param array{
     *     ToKey?: string|null,
     *     FromPath?: list<string>|null,
     *     FromType?: string|null,
     *     ToType?: string|null,
     *     Dropped?: bool|null,
     *     Children?: list<Mapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
