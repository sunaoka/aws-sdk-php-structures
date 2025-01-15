<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $PackagingGroupId
 */
class ListPackagingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     PackagingGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
