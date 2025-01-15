<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AWSAccountId
 * @property double|null $CreationDate
 * @property string|null $KeyId
 * @property string|null $KeyManager
 * @property string|null $KeyState
 * @property string|null $Origin
 * @property string|null $Description
 * @property bool|null $KeyRotationStatus
 */
class AwsKmsKeyDetails extends Shape
{
    /**
     * @param array{
     *     AWSAccountId?: string|null,
     *     CreationDate?: double|null,
     *     KeyId?: string|null,
     *     KeyManager?: string|null,
     *     KeyState?: string|null,
     *     Origin?: string|null,
     *     Description?: string|null,
     *     KeyRotationStatus?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
