<?php

namespace Sunaoka\Aws\Structures\Sts\GetScopedCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Policy
 * @property int<1, 129600>|null $DurationSeconds
 * @property int<0, 4096>|null $MinimumSessionTokenSize
 * @property string|null $ScopedSessionDescription
 */
class GetScopedCredentialsRequest extends Request
{
    /**
     * @param array{
     *     Policy?: string|null,
     *     DurationSeconds?: int<1, 129600>|null,
     *     MinimumSessionTokenSize?: int<0, 4096>|null,
     *     ScopedSessionDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
