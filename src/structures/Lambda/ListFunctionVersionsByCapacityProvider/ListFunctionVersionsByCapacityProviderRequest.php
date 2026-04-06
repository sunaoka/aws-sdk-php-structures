<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionVersionsByCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityProviderName
 * @property string|null $Marker
 * @property int<1, 50>|null $MaxItems
 */
class ListFunctionVersionsByCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     CapacityProviderName: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
