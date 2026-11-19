<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\InitiatePointInTimeRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property \Aws\Api\DateTimeResult $RestoreTimestamp
 */
class InitiatePointInTimeRecoveryRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     RestoreTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
