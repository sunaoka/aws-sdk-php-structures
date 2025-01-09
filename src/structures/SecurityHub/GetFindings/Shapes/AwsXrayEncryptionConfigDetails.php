<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyId
 * @property string $Status
 * @property string $Type
 */
class AwsXrayEncryptionConfigDetails extends Shape
{
    /**
     * @param array{
     *     KeyId?: string,
     *     Status?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
