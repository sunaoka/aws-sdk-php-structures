<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsSignerJobId
 * @property StartSigningJobParameter $startSigningJobParameter
 * @property CustomCodeSigning $customCodeSigning
 */
class CodeSigning extends Shape
{
    /**
     * @param array{
     *     awsSignerJobId?: string,
     *     startSigningJobParameter?: StartSigningJobParameter,
     *     customCodeSigning?: CustomCodeSigning
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
