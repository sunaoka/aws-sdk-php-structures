<?php

namespace Sunaoka\Aws\Structures\Lambda\ListProvisionedConcurrencyConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Marker
 * @property int $MaxItems
 */
class ListProvisionedConcurrencyConfigsRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
