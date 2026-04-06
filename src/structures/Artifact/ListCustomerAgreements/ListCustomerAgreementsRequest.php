<?php

namespace Sunaoka\Aws\Structures\Artifact\ListCustomerAgreements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 300>|null $maxResults
 * @property string|null $nextToken
 */
class ListCustomerAgreementsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 300>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
