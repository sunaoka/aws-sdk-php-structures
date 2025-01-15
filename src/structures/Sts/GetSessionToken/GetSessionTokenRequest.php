<?php

namespace Sunaoka\Aws\Structures\Sts\GetSessionToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<900, 129600>|null $DurationSeconds
 * @property string|null $SerialNumber
 * @property string|null $TokenCode
 */
class GetSessionTokenRequest extends Request
{
    /**
     * @param array{
     *     DurationSeconds?: int<900, 129600>|null,
     *     SerialNumber?: string|null,
     *     TokenCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
