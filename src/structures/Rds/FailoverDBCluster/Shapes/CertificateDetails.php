<?php

namespace Sunaoka\Aws\Structures\Rds\FailoverDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CAIdentifier
 * @property \Aws\Api\DateTimeResult|null $ValidTill
 */
class CertificateDetails extends Shape
{
    /**
     * @param array{
     *     CAIdentifier?: string|null,
     *     ValidTill?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
