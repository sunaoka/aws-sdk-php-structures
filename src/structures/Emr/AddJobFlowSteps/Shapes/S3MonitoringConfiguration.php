<?php

namespace Sunaoka\Aws\Structures\Emr\AddJobFlowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogUri
 * @property string|null $EncryptionKeyArn
 */
class S3MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     LogUri?: string|null,
     *     EncryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
