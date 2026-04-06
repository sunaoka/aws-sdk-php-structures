<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListCasesForContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $contactArn
 * @property int<1, 10>|null $maxResults
 * @property string|null $nextToken
 */
class ListCasesForContactRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     contactArn: string,
     *     maxResults?: int<1, 10>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
