<?php

namespace Sunaoka\Aws\Structures\CognitoSync\SetIdentityPoolConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property Shapes\PushSync|null $PushSync
 * @property Shapes\CognitoStreams|null $CognitoStreams
 */
class SetIdentityPoolConfigurationRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     PushSync?: Shapes\PushSync|null,
     *     CognitoStreams?: Shapes\CognitoStreams|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
