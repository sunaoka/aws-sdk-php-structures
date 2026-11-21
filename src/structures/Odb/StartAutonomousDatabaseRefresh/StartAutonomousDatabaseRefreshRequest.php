<?php

namespace Sunaoka\Aws\Structures\Odb\StartAutonomousDatabaseRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 * @property \Aws\Api\DateTimeResult|null $timeOfRefreshCutoff
 */
class StartAutonomousDatabaseRefreshRequest extends Request
{
    /**
     * @param array{
     *     autonomousDatabaseId: string,
     *     timeOfRefreshCutoff?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
