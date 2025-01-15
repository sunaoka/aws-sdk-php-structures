<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyId
 * @property string|null $Status
 * @property string|null $Type
 */
class AwsXrayEncryptionConfigDetails extends Shape
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     Status?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
