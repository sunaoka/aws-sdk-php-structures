<?php

namespace Sunaoka\Aws\Structures\Polly\ListLexicons;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class ListLexiconsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
