<?php

namespace Sunaoka\Aws\Structures\Ses\ListCustomVerificationEmailTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListCustomVerificationEmailTemplatesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
