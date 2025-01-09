<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'unsupported'|'supported'|'default' $EbsOptimizedSupport
 * @property 'unsupported'|'supported' $EncryptionSupport
 * @property EbsOptimizedInfo $EbsOptimizedInfo
 * @property 'unsupported'|'supported'|'required' $NvmeSupport
 */
class EbsInfo extends Shape
{
    /**
     * @param array{
     *     EbsOptimizedSupport?: 'unsupported'|'supported'|'default',
     *     EncryptionSupport?: 'unsupported'|'supported',
     *     EbsOptimizedInfo?: EbsOptimizedInfo,
     *     NvmeSupport?: 'unsupported'|'supported'|'required'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
