<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AWSAccountId
 * @property double $CreationDate
 * @property string $KeyId
 * @property string $KeyManager
 * @property string $KeyState
 * @property string $Origin
 * @property string $Description
 * @property bool $KeyRotationStatus
 */
class AwsKmsKeyDetails extends Shape
{
    /**
     * @param array{
     *     AWSAccountId?: string,
     *     CreationDate?: double,
     *     KeyId?: string,
     *     KeyManager?: string,
     *     KeyState?: string,
     *     Origin?: string,
     *     Description?: string,
     *     KeyRotationStatus?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
