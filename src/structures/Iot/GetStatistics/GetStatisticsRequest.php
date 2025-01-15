<?php

namespace Sunaoka\Aws\Structures\Iot\GetStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $indexName
 * @property string $queryString
 * @property string|null $aggregationField
 * @property string|null $queryVersion
 */
class GetStatisticsRequest extends Request
{
    /**
     * @param array{
     *     indexName?: string|null,
     *     queryString: string,
     *     aggregationField?: string|null,
     *     queryVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
