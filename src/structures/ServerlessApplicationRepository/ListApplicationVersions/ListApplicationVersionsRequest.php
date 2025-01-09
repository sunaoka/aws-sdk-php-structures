<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplicationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property int $MaxItems
 * @property string $NextToken
 */
class ListApplicationVersionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     MaxItems?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
