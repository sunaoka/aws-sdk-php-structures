<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsSignerJobId
 * @property StartSigningJobParameter|null $startSigningJobParameter
 * @property CustomCodeSigning|null $customCodeSigning
 */
class CodeSigning extends Shape
{
    /**
     * @param array{
     *     awsSignerJobId?: string|null,
     *     startSigningJobParameter?: StartSigningJobParameter|null,
     *     customCodeSigning?: CustomCodeSigning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
