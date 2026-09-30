<?php

namespace Sunaoka\Aws\Structures\SesV2\ListConfigurationSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'CONFIGURATION_SET_NAME_CONTAINS', string>|null $Filter
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListConfigurationSetsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: array<'CONFIGURATION_SET_NAME_CONTAINS', string>|null,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
