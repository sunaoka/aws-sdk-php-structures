<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $SpaceId
 * @property int<1, 100>|null $MaxContributors
 */
class DescribeSpaceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     SpaceId: string,
     *     MaxContributors?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
