<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectivePatchesForPatchBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaselineId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeEffectivePatchesForPatchBaselineRequest extends Request
{
    /**
     * @param array{
     *     BaselineId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
