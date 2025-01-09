<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIds
 * @property list<string> $OrganizationalUnitIds
 */
class DescribeOrganizationHealthRequest extends Request
{
    /**
     * @param array{
     *     AccountIds?: list<string>,
     *     OrganizationalUnitIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
