<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurationsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $LicenseConfigurationArns
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class ListLicenseConfigurationsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     LicenseConfigurationArns?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
