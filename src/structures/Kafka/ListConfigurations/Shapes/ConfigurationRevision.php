<?php

namespace Sunaoka\Aws\Structures\Kafka\ListConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string|null $Description
 * @property int $Revision
 */
class ConfigurationRevision extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     Description?: string|null,
     *     Revision: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
