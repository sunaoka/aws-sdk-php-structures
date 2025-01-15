<?php

namespace Sunaoka\Aws\Structures\MQ\CreateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Created
 * @property string|null $Description
 * @property int $Revision
 */
class ConfigurationRevision extends Shape
{
    /**
     * @param array{
     *     Created: \Aws\Api\DateTimeResult,
     *     Description?: string|null,
     *     Revision: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
