<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetailsWithEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property string $ServiceNamespace
 * @property int $MaxItems
 * @property string $Marker
 */
class GetServiceLastAccessedDetailsWithEntitiesRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     ServiceNamespace: string,
     *     MaxItems?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
