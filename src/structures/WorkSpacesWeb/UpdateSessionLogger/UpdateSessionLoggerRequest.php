<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateSessionLogger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionLoggerArn
 * @property Shapes\EventFilter|null $eventFilter
 * @property Shapes\LogConfiguration|null $logConfiguration
 * @property string|null $displayName
 */
class UpdateSessionLoggerRequest extends Request
{
    /**
     * @param array{
     *     sessionLoggerArn: string,
     *     eventFilter?: Shapes\EventFilter|null,
     *     logConfiguration?: Shapes\LogConfiguration|null,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
