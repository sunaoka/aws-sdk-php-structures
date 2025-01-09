<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeChapCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetARN
 * @property string $SecretToAuthenticateInitiator
 * @property string $InitiatorName
 * @property string $SecretToAuthenticateTarget
 */
class ChapInfo extends Shape
{
    /**
     * @param array{
     *     TargetARN?: string,
     *     SecretToAuthenticateInitiator?: string,
     *     InitiatorName?: string,
     *     SecretToAuthenticateTarget?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
