<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property RuntimeEnvironment|null $RuntimeEnvironment
 * @property 'INITIALIZED'|'PROCESSING'|'READY'|'DELETING'|'ERROR'|null $Status
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Id?: string|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     RuntimeEnvironment?: RuntimeEnvironment|null,
     *     Status?: 'INITIALIZED'|'PROCESSING'|'READY'|'DELETING'|'ERROR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
