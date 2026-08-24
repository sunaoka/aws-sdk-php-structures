<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inlinePem
 * @property string|null $artifactId
 * @property string|null $s3Location
 */
class CaCertificateSource extends Shape
{
    /**
     * @param array{
     *     inlinePem?: string|null,
     *     artifactId?: string|null,
     *     s3Location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
