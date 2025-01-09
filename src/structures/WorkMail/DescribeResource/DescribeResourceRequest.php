<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ResourceId
 */
class DescribeResourceRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
