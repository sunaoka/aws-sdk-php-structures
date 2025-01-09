<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchId
 */
class GetArchiveSearchRequest extends Request
{
    /**
     * @param array{SearchId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
