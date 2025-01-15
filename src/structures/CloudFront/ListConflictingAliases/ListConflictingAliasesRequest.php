<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConflictingAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 * @property string $Alias
 * @property string|null $Marker
 * @property int<min, 100>|null $MaxItems
 */
class ListConflictingAliasesRequest extends Request
{
    /**
     * @param array{
     *     DistributionId: string,
     *     Alias: string,
     *     Marker?: string|null,
     *     MaxItems?: int<min, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
