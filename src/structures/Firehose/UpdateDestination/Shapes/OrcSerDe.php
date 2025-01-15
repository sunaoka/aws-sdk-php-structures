<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<8388608, max>|null $StripeSizeBytes
 * @property int<67108864, max>|null $BlockSizeBytes
 * @property int<1000, max>|null $RowIndexStride
 * @property bool|null $EnablePadding
 * @property double|null $PaddingTolerance
 * @property 'NONE'|'ZLIB'|'SNAPPY'|null $Compression
 * @property list<string>|null $BloomFilterColumns
 * @property double|null $BloomFilterFalsePositiveProbability
 * @property double|null $DictionaryKeyThreshold
 * @property 'V0_11'|'V0_12'|null $FormatVersion
 */
class OrcSerDe extends Shape
{
    /**
     * @param array{
     *     StripeSizeBytes?: int<8388608, max>|null,
     *     BlockSizeBytes?: int<67108864, max>|null,
     *     RowIndexStride?: int<1000, max>|null,
     *     EnablePadding?: bool|null,
     *     PaddingTolerance?: double|null,
     *     Compression?: 'NONE'|'ZLIB'|'SNAPPY'|null,
     *     BloomFilterColumns?: list<string>|null,
     *     BloomFilterFalsePositiveProbability?: double|null,
     *     DictionaryKeyThreshold?: double|null,
     *     FormatVersion?: 'V0_11'|'V0_12'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
