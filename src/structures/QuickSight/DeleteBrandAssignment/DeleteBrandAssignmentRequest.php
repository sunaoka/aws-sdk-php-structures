<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteBrandAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 */
class DeleteBrandAssignmentRequest extends Request
{
    /**
     * @param array{AwsAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
