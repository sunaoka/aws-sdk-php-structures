<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'Requested'|'Updating'|'Updated'|'Failed'|'Default'|null $Status
 * @property string|null $NextToken
 */
class DescribeSettingsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Status?: 'Requested'|'Updating'|'Updated'|'Failed'|'Default'|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
