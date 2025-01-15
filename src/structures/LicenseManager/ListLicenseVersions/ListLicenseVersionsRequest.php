<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListLicenseVersionsRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
