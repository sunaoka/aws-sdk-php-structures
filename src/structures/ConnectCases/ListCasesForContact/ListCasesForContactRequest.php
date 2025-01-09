<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListCasesForContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contactArn
 * @property string $domainId
 * @property int<1, 10> $maxResults
 * @property string $nextToken
 */
class ListCasesForContactRequest extends Request
{
    /**
     * @param array{
     *     contactArn: string,
     *     domainId: string,
     *     maxResults?: int<1, 10>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
