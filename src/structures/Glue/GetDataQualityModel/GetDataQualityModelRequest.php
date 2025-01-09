<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StatisticId
 * @property string $ProfileId
 */
class GetDataQualityModelRequest extends Request
{
    /**
     * @param array{
     *     StatisticId?: string,
     *     ProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
