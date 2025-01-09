<?php

namespace Sunaoka\Aws\Structures\Iot\GetCardinality;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $indexName
 * @property string $queryString
 * @property string $aggregationField
 * @property string $queryVersion
 */
class GetCardinalityRequest extends Request
{
    /**
     * @param array{
     *     indexName?: string,
     *     queryString: string,
     *     aggregationField?: string,
     *     queryVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
