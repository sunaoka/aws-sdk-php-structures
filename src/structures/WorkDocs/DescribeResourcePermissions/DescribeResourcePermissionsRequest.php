<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeResourcePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $ResourceId
 * @property string|null $PrincipalId
 * @property int<1, 999>|null $Limit
 * @property string|null $Marker
 */
class DescribeResourcePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     ResourceId: string,
     *     PrincipalId?: string|null,
     *     Limit?: int<1, 999>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
