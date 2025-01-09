<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionsByCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeSigningConfigArn
 * @property string $Marker
 * @property int $MaxItems
 */
class ListFunctionsByCodeSigningConfigRequest extends Request
{
    /**
     * @param array{
     *     CodeSigningConfigArn: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
