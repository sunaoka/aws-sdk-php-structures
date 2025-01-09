<?php

namespace Sunaoka\Aws\Structures\Iam\ListPolicyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property string $Marker
 * @property int $MaxItems
 */
class ListPolicyVersionsRequest extends Request
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
