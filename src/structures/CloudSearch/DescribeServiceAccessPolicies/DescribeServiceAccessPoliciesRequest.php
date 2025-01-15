<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeServiceAccessPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property bool|null $Deployed
 */
class DescribeServiceAccessPoliciesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Deployed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
