<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StandardsArn
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListSecurityControlDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     StandardsArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
