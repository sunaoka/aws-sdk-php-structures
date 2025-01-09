<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100000> $limit
 * @property 'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'TRIM_HORIZON'|'LATEST' $iteratorType
 * @property int $commitNum
 * @property int $opNum
 * @property 'gzip' $encoding
 */
class GetPropertygraphStreamRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 100000>,
     *     iteratorType?: 'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'TRIM_HORIZON'|'LATEST',
     *     commitNum?: int,
     *     opNum?: int,
     *     encoding?: 'gzip'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
