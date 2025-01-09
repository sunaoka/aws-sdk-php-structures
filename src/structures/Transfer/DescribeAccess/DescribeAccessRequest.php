<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property string $ExternalId
 */
class DescribeAccessRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     ExternalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
