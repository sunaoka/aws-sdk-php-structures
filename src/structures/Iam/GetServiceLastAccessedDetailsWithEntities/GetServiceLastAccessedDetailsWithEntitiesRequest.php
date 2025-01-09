<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetailsWithEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property string $ServiceNamespace
 * @property int<1, 1000> $MaxItems
 * @property string $Marker
 */
class GetServiceLastAccessedDetailsWithEntitiesRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     ServiceNamespace: string,
     *     MaxItems?: int<1, 1000>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
