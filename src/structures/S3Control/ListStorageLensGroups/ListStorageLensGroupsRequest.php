<?php

namespace Sunaoka\Aws\Structures\S3Control\ListStorageLensGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $NextToken
 */
class ListStorageLensGroupsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
