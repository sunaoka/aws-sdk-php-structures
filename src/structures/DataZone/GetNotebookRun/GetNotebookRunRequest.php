<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 */
class GetNotebookRunRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
