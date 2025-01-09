<?php

namespace Sunaoka\Aws\Structures\Polly\DeleteLexicon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteLexiconRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
