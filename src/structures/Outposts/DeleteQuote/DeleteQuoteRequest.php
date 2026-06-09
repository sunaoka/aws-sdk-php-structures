<?php

namespace Sunaoka\Aws\Structures\Outposts\DeleteQuote;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QuoteIdentifier
 */
class DeleteQuoteRequest extends Request
{
    /**
     * @param array{QuoteIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
