<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StripeSizeBytes
 * @property int $BlockSizeBytes
 * @property int $RowIndexStride
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
     *     StripeSizeBytes?: int,
     *     BlockSizeBytes?: int,
     *     RowIndexStride?: int,
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
