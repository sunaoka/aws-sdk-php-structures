<?php

namespace Sunaoka\Aws\Structures\Glue\ListGlossaryTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlossaryIdentifier
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListGlossaryTermsRequest extends Request
{
    /**
     * @param array{
     *     GlossaryIdentifier: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
