<?php

namespace Sunaoka\Aws\Structures\Ses\ListReceiptRuleSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class ListReceiptRuleSetsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
