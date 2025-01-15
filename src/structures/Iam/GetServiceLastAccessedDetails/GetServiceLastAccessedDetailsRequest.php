<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, 1000>|null $MaxItems
 * @property string|null $Marker
 */
class GetServiceLastAccessedDetailsRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxItems?: int<1, 1000>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
