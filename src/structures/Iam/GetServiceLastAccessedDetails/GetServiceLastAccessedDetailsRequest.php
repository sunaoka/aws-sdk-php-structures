<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, 1000> $MaxItems
 * @property string $Marker
 */
class GetServiceLastAccessedDetailsRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxItems?: int<1, 1000>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
