<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConflictingAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 * @property string $Alias
 * @property string $Marker
 * @property int $MaxItems
 */
class ListConflictingAliasesRequest extends Request
{
    /**
     * @param array{
     *     DistributionId: string,
     *     Alias: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
