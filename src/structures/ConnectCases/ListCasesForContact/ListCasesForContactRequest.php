<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListCasesForContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contactArn
 * @property string $domainId
 * @property int<1, 10>|null $maxResults
 * @property string|null $nextToken
 */
class ListCasesForContactRequest extends Request
{
    /**
     * @param array{
     *     contactArn: string,
     *     domainId: string,
     *     maxResults?: int<1, 10>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
