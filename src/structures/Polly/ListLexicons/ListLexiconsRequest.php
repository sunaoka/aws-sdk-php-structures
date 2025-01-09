<?php

namespace Sunaoka\Aws\Structures\Polly\ListLexicons;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListLexiconsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
