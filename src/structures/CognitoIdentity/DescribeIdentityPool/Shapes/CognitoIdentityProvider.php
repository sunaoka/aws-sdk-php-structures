<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DescribeIdentityPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProviderName
 * @property string|null $ClientId
 * @property bool|null $ServerSideTokenCheck
 */
class CognitoIdentityProvider extends Shape
{
    /**
     * @param array{
     *     ProviderName?: string|null,
     *     ClientId?: string|null,
     *     ServerSideTokenCheck?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
