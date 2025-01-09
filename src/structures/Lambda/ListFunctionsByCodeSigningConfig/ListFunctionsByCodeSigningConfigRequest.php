<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionsByCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeSigningConfigArn
 * @property string $Marker
 * @property int<1, 10000> $MaxItems
 */
class ListFunctionsByCodeSigningConfigRequest extends Request
{
    /**
     * @param array{
     *     CodeSigningConfigArn: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
