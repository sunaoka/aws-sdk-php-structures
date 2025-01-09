<?php

namespace Sunaoka\Aws\Structures\MQ\ListConfigurationRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $Description
 * @property int $Revision
 */
class ConfigurationRevision extends Shape
{
    /**
     * @param array{
     *     Created: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Revision: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
