<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100000>|null $limit
 * @property 'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'TRIM_HORIZON'|'LATEST'|null $iteratorType
 * @property int|null $commitNum
 * @property int|null $opNum
 * @property 'gzip'|null $encoding
 */
class GetPropertygraphStreamRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 100000>|null,
     *     iteratorType?: 'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'TRIM_HORIZON'|'LATEST'|null,
     *     commitNum?: int|null,
     *     opNum?: int|null,
     *     encoding?: 'gzip'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
