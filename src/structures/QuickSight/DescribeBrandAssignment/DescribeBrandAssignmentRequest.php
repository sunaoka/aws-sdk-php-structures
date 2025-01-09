<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 */
class DescribeBrandAssignmentRequest extends Request
{
    /**
     * @param array{AwsAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
