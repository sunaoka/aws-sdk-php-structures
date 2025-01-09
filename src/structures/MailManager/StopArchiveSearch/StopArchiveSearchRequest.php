<?php

namespace Sunaoka\Aws\Structures\MailManager\StopArchiveSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchId
 */
class StopArchiveSearchRequest extends Request
{
    /**
     * @param array{SearchId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
