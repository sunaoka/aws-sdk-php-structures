<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $PackagingGroupId
 */
class ListPackagingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     PackagingGroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
