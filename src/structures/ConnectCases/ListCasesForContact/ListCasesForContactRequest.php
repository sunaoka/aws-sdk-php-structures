<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListCasesForContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contactArn
 * @property string $domainId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListCasesForContactRequest extends Request
{
    /**
     * @param array{
     *     contactArn: string,
     *     domainId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
