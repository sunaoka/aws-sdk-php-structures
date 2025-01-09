<?php

namespace Sunaoka\Aws\Structures\Polly\GetLexicon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetLexiconRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
