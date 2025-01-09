<?php

namespace Sunaoka\Aws\Structures\CognitoSync\SetIdentityPoolConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property Shapes\PushSync $PushSync
 * @property Shapes\CognitoStreams $CognitoStreams
 */
class SetIdentityPoolConfigurationRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     PushSync?: Shapes\PushSync,
     *     CognitoStreams?: Shapes\CognitoStreams
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
