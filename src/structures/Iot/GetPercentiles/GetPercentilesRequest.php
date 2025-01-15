<?php

namespace Sunaoka\Aws\Structures\Iot\GetPercentiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $indexName
 * @property string $queryString
 * @property string|null $aggregationField
 * @property string|null $queryVersion
 * @property list<double>|null $percents
 */
class GetPercentilesRequest extends Request
{
    /**
     * @param array{
     *     indexName?: string|null,
     *     queryString: string,
     *     aggregationField?: string|null,
     *     queryVersion?: string|null,
     *     percents?: list<double>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
