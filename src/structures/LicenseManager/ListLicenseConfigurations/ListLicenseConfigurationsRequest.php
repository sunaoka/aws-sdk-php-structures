<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LicenseConfigurationArns
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 */
class ListLicenseConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     LicenseConfigurationArns?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
