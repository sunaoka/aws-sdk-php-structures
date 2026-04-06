<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListSelfUpgrades;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListSelfUpgradesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
