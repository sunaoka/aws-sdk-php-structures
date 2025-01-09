<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListFailuresForLicenseConfigurationOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConfigurationArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListFailuresForLicenseConfigurationOperationsRequest extends Request
{
    /**
     * @param array{
     *     LicenseConfigurationArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
