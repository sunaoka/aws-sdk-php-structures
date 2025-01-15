<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplicationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property int<1, 100>|null $MaxItems
 * @property string|null $NextToken
 */
class ListApplicationVersionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     MaxItems?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
