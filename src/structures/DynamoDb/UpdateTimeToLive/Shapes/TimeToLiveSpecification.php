<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTimeToLive\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $AttributeName
 */
class TimeToLiveSpecification extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     AttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
