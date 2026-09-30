<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $int
 * @property string|null $float
 * @property string|null $string
 * @property string|null $path
 * @property string|null $bool
 * @property string|null $rangeExpr
 * @property list<string>|null $stringList
 * @property list<string>|null $pathList
 * @property list<string>|null $intList
 * @property list<string>|null $floatList
 * @property list<string>|null $boolList
 * @property list<list<string>>|null $intListList
 */
class JobParameter extends Shape
{
    /**
     * @param array{
     *     int?: string|null,
     *     float?: string|null,
     *     string?: string|null,
     *     path?: string|null,
     *     bool?: string|null,
     *     rangeExpr?: string|null,
     *     stringList?: list<string>|null,
     *     pathList?: list<string>|null,
     *     intList?: list<string>|null,
     *     floatList?: list<string>|null,
     *     boolList?: list<string>|null,
     *     intListList?: list<list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
