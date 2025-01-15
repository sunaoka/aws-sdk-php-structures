<?php

namespace Sunaoka\Aws\Structures\Iam\ListPolicyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListPolicyVersionsRequest extends Request
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
