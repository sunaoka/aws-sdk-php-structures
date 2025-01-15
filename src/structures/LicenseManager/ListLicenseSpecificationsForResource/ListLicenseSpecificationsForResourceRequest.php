<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseSpecificationsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListLicenseSpecificationsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
