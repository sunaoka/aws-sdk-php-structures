<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $LogGroup
 * @property string|null $LogStreamNamePrefix
 * @property array<string, list<string>>|null $LogTypes
 */
class CloudWatchLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     LogGroup?: string|null,
     *     LogStreamNamePrefix?: string|null,
     *     LogTypes?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
