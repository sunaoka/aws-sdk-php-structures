<?php

namespace Sunaoka\Aws\Structures\Sts\GetSessionToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<900, 129600> $DurationSeconds
 * @property string $SerialNumber
 * @property string $TokenCode
 */
class GetSessionTokenRequest extends Request
{
    /**
     * @param array{
     *     DurationSeconds?: int<900, 129600>,
     *     SerialNumber?: string,
     *     TokenCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
