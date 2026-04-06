<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'unsupported'|'supported'|'default'|null $EbsOptimizedSupport
 * @property 'unsupported'|'supported'|null $EncryptionSupport
 * @property EbsOptimizedInfo|null $EbsOptimizedInfo
 * @property 'unsupported'|'supported'|'required'|null $NvmeSupport
 */
class EbsInfo extends Shape
{
    /**
     * @param array{
     *     EbsOptimizedSupport?: 'unsupported'|'supported'|'default'|null,
     *     EncryptionSupport?: 'unsupported'|'supported'|null,
     *     EbsOptimizedInfo?: EbsOptimizedInfo|null,
     *     NvmeSupport?: 'unsupported'|'supported'|'required'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
