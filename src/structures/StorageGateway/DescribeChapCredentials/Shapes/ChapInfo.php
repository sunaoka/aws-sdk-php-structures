<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeChapCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetARN
 * @property string|null $SecretToAuthenticateInitiator
 * @property string|null $InitiatorName
 * @property string|null $SecretToAuthenticateTarget
 */
class ChapInfo extends Shape
{
    /**
     * @param array{
     *     TargetARN?: string|null,
     *     SecretToAuthenticateInitiator?: string|null,
     *     InitiatorName?: string|null,
     *     SecretToAuthenticateTarget?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
