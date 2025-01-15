<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListUsageForLicenseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConfigurationArn
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class ListUsageForLicenseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     LicenseConfigurationArn: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
