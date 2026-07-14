<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeManagedEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logUri
 * @property string|null $encryptionKeyArn
 */
class S3MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     logUri: string,
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
