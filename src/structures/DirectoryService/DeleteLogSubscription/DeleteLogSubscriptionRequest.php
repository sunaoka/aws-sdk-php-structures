<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteLogSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class DeleteLogSubscriptionRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
