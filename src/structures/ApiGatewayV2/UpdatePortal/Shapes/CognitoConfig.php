<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppClientId
 * @property string $UserPoolArn
 * @property string $UserPoolDomain
 */
class CognitoConfig extends Shape
{
    /**
     * @param array{
     *     AppClientId: string,
     *     UserPoolArn: string,
     *     UserPoolDomain: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
