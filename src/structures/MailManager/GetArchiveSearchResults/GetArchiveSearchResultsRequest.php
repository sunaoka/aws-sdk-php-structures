<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearchResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchId
 */
class GetArchiveSearchResultsRequest extends Request
{
    /**
     * @param array{SearchId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
