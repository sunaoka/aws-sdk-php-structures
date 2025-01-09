<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedGrantsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListReceivedGrantsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
