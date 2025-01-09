<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appVersion
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property int $identifier
 * @property string $versionName
 */
class AppVersionSummary extends Shape
{
    /**
     * @param array{
     *     appVersion: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     identifier?: int,
     *     versionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
