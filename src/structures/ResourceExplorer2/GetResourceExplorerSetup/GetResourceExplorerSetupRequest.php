<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetResourceExplorerSetup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetResourceExplorerSetupRequest extends Request
{
    /**
     * @param array{
     *     TaskId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
