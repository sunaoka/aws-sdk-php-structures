<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StandardsArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListSecurityControlDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     StandardsArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
