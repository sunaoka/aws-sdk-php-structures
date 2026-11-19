<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StartPointInTimeRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $RestoreId
 */
class StartPointInTimeRecoveryRequest extends Request
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
