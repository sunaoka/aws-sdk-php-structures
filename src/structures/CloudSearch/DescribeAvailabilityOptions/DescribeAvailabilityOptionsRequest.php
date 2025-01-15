<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeAvailabilityOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property bool|null $Deployed
 */
class DescribeAvailabilityOptionsRequest extends Request
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
