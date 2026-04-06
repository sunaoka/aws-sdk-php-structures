<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListGroupingAttributeDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string|null $AwsAccountId
 * @property bool|null $IncludeLinkedAccounts
 */
class ListGroupingAttributeDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     AwsAccountId?: string|null,
     *     IncludeLinkedAccounts?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
