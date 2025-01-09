<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logUri
 * @property string $encryptionKeyArn
 */
class S3MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     logUri?: string,
     *     encryptionKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
