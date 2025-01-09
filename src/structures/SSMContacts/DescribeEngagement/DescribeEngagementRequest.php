<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DescribeEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngagementId
 */
class DescribeEngagementRequest extends Request
{
    /**
     * @param array{EngagementId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
