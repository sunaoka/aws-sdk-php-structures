<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRuleSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $PageSize
 */
class ListRuleSetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
