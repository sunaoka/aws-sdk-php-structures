<?php

namespace Sunaoka\Aws\Structures\Artifact\ListCustomerAgreements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 300> $maxResults
 * @property string $nextToken
 */
class ListCustomerAgreementsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 300>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
