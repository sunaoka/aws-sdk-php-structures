<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StandardsArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListSecurityControlDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     StandardsArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
