<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeAvailabilityOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property bool $Deployed
 */
class DescribeAvailabilityOptionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Deployed?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
