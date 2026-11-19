<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CancelPointInTimeRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $RestoreId
 */
class CancelPointInTimeRecoveryRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     RestoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
