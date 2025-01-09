<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateLogSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $LogGroupName
 */
class CreateLogSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     LogGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
