<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStudioComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $launchProfileProtocolVersion
 * @property 'LINUX'|'WINDOWS'|null $platform
 * @property 'SYSTEM_INITIALIZATION'|'USER_INITIALIZATION'|null $runContext
 * @property string|null $script
 */
class StudioComponentInitializationScript extends Shape
{
    /**
     * @param array{
     *     launchProfileProtocolVersion?: string|null,
     *     platform?: 'LINUX'|'WINDOWS'|null,
     *     runContext?: 'SYSTEM_INITIALIZATION'|'USER_INITIALIZATION'|null,
     *     script?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
