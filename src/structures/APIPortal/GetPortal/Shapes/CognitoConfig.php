<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetPortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userPoolArn
 * @property string $appClientId
 * @property string $userPoolDomain
 * @property string|null $identityPoolId
 */
class CognitoConfig extends Shape
{
    /**
     * @param array{
     *     userPoolArn: string,
     *     appClientId: string,
     *     userPoolDomain: string,
     *     identityPoolId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
