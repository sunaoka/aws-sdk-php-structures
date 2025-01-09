<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property int<1, max> $VersionNumber
 * @property string $AliasName
 */
class DescribeDashboardDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     VersionNumber?: int<1, max>,
     *     AliasName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
