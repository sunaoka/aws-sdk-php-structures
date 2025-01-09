<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationResourceCollectionHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS_CLOUD_FORMATION'|'AWS_SERVICE'|'AWS_ACCOUNT'|'AWS_TAGS' $OrganizationResourceCollectionType
 * @property list<string> $AccountIds
 * @property list<string> $OrganizationalUnitIds
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeOrganizationResourceCollectionHealthRequest extends Request
{
    /**
     * @param array{
     *     OrganizationResourceCollectionType: 'AWS_CLOUD_FORMATION'|'AWS_SERVICE'|'AWS_ACCOUNT'|'AWS_TAGS',
     *     AccountIds?: list<string>,
     *     OrganizationalUnitIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
