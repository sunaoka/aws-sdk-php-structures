<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseAssetRulesets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $ShowAWSManagedLicenseAssetRulesets
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListLicenseAssetRulesetsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     ShowAWSManagedLicenseAssetRulesets?: bool|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
