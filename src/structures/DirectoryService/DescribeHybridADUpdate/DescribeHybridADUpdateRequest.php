<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeHybridADUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'SelfManagedInstances'|'HybridAdministratorAccount'|null $UpdateType
 * @property string|null $NextToken
 */
class DescribeHybridADUpdateRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UpdateType?: 'SelfManagedInstances'|'HybridAdministratorAccount'|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
