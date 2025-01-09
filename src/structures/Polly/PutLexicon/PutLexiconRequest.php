<?php

namespace Sunaoka\Aws\Structures\Polly\PutLexicon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Content
 */
class PutLexiconRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Content: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
