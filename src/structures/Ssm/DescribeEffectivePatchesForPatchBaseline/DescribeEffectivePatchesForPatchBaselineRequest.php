<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectivePatchesForPatchBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaselineId
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeEffectivePatchesForPatchBaselineRequest extends Request
{
    /**
     * @param array{
     *     BaselineId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
