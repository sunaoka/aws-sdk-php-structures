<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeResourcePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $ResourceId
 * @property string $PrincipalId
 * @property int<1, 999> $Limit
 * @property string $Marker
 */
class DescribeResourcePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     ResourceId: string,
     *     PrincipalId?: string,
     *     Limit?: int<1, 999>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
