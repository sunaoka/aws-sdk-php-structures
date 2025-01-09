<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListLicenseVersionsRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
