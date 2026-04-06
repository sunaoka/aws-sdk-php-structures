<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListSessionLoggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionLoggerArn
 * @property LogConfiguration|null $logConfiguration
 * @property string|null $displayName
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class SessionLoggerSummary extends Shape
{
    /**
     * @param array{
     *     sessionLoggerArn: string,
     *     logConfiguration?: LogConfiguration|null,
     *     displayName?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
