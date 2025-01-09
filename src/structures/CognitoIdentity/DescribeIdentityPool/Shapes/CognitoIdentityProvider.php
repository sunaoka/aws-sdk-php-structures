<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DescribeIdentityPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProviderName
 * @property string $ClientId
 * @property bool $ServerSideTokenCheck
 */
class CognitoIdentityProvider extends Shape
{
    /**
     * @param array{
     *     ProviderName?: string,
     *     ClientId?: string,
     *     ServerSideTokenCheck?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
