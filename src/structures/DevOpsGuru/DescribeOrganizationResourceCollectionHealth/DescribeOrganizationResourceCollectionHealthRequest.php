<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationResourceCollectionHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS_CLOUD_FORMATION'|'AWS_SERVICE'|'AWS_ACCOUNT'|'AWS_TAGS' $OrganizationResourceCollectionType
 * @property list<string>|null $AccountIds
 * @property list<string>|null $OrganizationalUnitIds
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class DescribeOrganizationResourceCollectionHealthRequest extends Request
{
    /**
     * @param array{
     *     OrganizationResourceCollectionType: 'AWS_CLOUD_FORMATION'|'AWS_SERVICE'|'AWS_ACCOUNT'|'AWS_TAGS',
     *     AccountIds?: list<string>|null,
     *     OrganizationalUnitIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
