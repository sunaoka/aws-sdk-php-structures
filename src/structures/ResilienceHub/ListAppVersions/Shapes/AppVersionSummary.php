<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appVersion
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property int|null $identifier
 * @property string|null $versionName
 */
class AppVersionSummary extends Shape
{
    /**
     * @param array{
     *     appVersion: string,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     identifier?: int|null,
     *     versionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
