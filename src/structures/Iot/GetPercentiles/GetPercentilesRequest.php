<?php

namespace Sunaoka\Aws\Structures\Iot\GetPercentiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $indexName
 * @property string $queryString
 * @property string $aggregationField
 * @property string $queryVersion
 * @property list<double> $percents
 */
class GetPercentilesRequest extends Request
{
    /**
     * @param array{
     *     indexName?: string,
     *     queryString: string,
     *     aggregationField?: string,
     *     queryVersion?: string,
     *     percents?: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
