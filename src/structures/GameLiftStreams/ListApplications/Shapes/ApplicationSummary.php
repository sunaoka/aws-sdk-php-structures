<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $Id
 * @property string|null $Description
 * @property 'INITIALIZED'|'PROCESSING'|'READY'|'DELETING'|'ERROR'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property RuntimeEnvironment|null $RuntimeEnvironment
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id?: string|null,
     *     Description?: string|null,
     *     Status?: 'INITIALIZED'|'PROCESSING'|'READY'|'DELETING'|'ERROR'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     RuntimeEnvironment?: RuntimeEnvironment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
