<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property list<string>|null $IncludedTagKeys
 * @property list<string>|null $ExcludedTagKeys
 */
class AlarmTagsPropagation extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     IncludedTagKeys?: list<string>|null,
     *     ExcludedTagKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
