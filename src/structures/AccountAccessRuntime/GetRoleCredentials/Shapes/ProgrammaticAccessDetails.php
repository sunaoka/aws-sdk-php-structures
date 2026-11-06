<?php

namespace Sunaoka\Aws\Structures\AccountAccessRuntime\GetRoleCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessKeyId
 * @property string $secretAccessKey
 * @property string $sessionToken
 * @property \Aws\Api\DateTimeResult $expiresAt
 */
class ProgrammaticAccessDetails extends Shape
{
    /**
     * @param array{
     *     accessKeyId: string,
     *     secretAccessKey: string,
     *     sessionToken: string,
     *     expiresAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
