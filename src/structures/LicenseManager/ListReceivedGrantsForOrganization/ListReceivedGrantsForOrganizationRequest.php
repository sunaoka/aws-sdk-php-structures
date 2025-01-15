<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedGrantsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListReceivedGrantsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
