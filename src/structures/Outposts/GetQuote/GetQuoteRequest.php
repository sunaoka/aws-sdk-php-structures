<?php

namespace Sunaoka\Aws\Structures\Outposts\GetQuote;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QuoteIdentifier
 */
class GetQuoteRequest extends Request
{
    /**
     * @param array{QuoteIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
