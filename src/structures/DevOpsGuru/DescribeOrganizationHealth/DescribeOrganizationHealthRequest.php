<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AccountIds
 * @property list<string>|null $OrganizationalUnitIds
 */
class DescribeOrganizationHealthRequest extends Request
{
    /**
     * @param array{
     *     AccountIds?: list<string>|null,
     *     OrganizationalUnitIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
