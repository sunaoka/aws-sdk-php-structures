<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListFailuresForLicenseConfigurationOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConfigurationArn
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListFailuresForLicenseConfigurationOperationsRequest extends Request
{
    /**
     * @param array{
     *     LicenseConfigurationArn: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
