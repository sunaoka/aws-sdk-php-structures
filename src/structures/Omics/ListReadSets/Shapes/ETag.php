<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FASTQ_MD5up'|'BAM_MD5up'|'CRAM_MD5up'|'FASTQ_SHA256up'|'BAM_SHA256up'|'CRAM_SHA256up'|'FASTQ_SHA512up'|'BAM_SHA512up'|'CRAM_SHA512up' $algorithm
 * @property string $source1
 * @property string $source2
 */
class ETag extends Shape
{
    /**
     * @param array{
     *     algorithm?: 'FASTQ_MD5up'|'BAM_MD5up'|'CRAM_MD5up'|'FASTQ_SHA256up'|'BAM_SHA256up'|'CRAM_SHA256up'|'FASTQ_SHA512up'|'BAM_SHA512up'|'CRAM_SHA512up',
     *     source1?: string,
     *     source2?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
