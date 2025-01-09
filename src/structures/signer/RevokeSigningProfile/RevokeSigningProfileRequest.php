<?php

namespace Sunaoka\Aws\Structures\signer\RevokeSigningProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 * @property string $profileVersion
 * @property string $reason
 * @property \Aws\Api\DateTimeResult $effectiveTime
 */
class RevokeSigningProfileRequest extends Request
{
    /**
     * @param array{
     *     profileName: string,
     *     profileVersion: string,
     *     reason: string,
     *     effectiveTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
