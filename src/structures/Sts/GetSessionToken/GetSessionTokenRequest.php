<?php

namespace Sunaoka\Aws\Structures\Sts\GetSessionToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $DurationSeconds
 * @property string $SerialNumber
 * @property string $TokenCode
 */
class GetSessionTokenRequest extends Request
{
    /**
     * @param array{
     *     DurationSeconds?: int,
     *     SerialNumber?: string,
     *     TokenCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
