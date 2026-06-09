<?php

namespace Sunaoka\Aws\Structures\Odb\RestoreAutonomousDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class RestoreAutonomousDatabaseRequest extends Request
{
    /**
     * @param array{
     *     autonomousDatabaseId: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
