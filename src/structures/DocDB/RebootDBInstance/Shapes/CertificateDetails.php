<?php

namespace Sunaoka\Aws\Structures\DocDB\RebootDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CAIdentifier
 * @property \Aws\Api\DateTimeResult $ValidTill
 */
class CertificateDetails extends Shape
{
    /**
     * @param array{
     *     CAIdentifier?: string,
     *     ValidTill?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
