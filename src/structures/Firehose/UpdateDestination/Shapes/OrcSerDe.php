<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<8388608, max> $StripeSizeBytes
 * @property int<67108864, max> $BlockSizeBytes
 * @property int<1000, max> $RowIndexStride
 * @property bool $EnablePadding
 * @property double $PaddingTolerance
 * @property 'NONE'|'ZLIB'|'SNAPPY' $Compression
 * @property list<string> $BloomFilterColumns
 * @property double $BloomFilterFalsePositiveProbability
 * @property double $DictionaryKeyThreshold
 * @property 'V0_11'|'V0_12' $FormatVersion
 */
class OrcSerDe extends Shape
{
    /**
     * @param array{
     *     StripeSizeBytes?: int<8388608, max>,
     *     BlockSizeBytes?: int<67108864, max>,
     *     RowIndexStride?: int<1000, max>,
     *     EnablePadding?: bool,
     *     PaddingTolerance?: double,
     *     Compression?: 'NONE'|'ZLIB'|'SNAPPY',
     *     BloomFilterColumns?: list<string>,
     *     BloomFilterFalsePositiveProbability?: double,
     *     DictionaryKeyThreshold?: double,
     *     FormatVersion?: 'V0_11'|'V0_12'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
