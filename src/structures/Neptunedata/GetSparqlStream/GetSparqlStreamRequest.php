<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetSparqlStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $limit
 * @property 'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'TRIM_HORIZON'|'LATEST' $iteratorType
 * @property int $commitNum
 * @property int $opNum
 * @property 'gzip' $encoding
 */
class GetSparqlStreamRequest extends Request
{
    /**
     * @param array{
     *     limit?: int,
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
