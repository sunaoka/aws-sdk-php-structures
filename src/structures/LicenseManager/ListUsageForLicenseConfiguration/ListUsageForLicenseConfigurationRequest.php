<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListUsageForLicenseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConfigurationArn
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 */
class ListUsageForLicenseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     LicenseConfigurationArn: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
