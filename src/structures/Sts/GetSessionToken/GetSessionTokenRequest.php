<?php

namespace Sunaoka\Aws\Structures\Sts\GetSessionToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<900, 129600>|null $DurationSeconds
 * @property string|null $SerialNumber
 * @property string|null $TokenCode
 * @property int<0, 4096>|null $MinimumSessionTokenSize
 */
class GetSessionTokenRequest extends Request
{
    /**
     * @param array{
     *     DurationSeconds?: int<900, 129600>|null,
     *     SerialNumber?: string|null,
     *     TokenCode?: string|null,
     *     MinimumSessionTokenSize?: int<0, 4096>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
