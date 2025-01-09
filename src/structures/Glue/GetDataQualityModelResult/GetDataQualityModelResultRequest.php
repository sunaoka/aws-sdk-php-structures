<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityModelResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StatisticId
 * @property string $ProfileId
 */
class GetDataQualityModelResultRequest extends Request
{
    /**
     * @param array{
     *     StatisticId: string,
     *     ProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
