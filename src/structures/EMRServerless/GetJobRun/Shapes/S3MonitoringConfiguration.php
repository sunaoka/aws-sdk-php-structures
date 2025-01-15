<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logUri
 * @property string|null $encryptionKeyArn
 */
class S3MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     logUri?: string|null,
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
