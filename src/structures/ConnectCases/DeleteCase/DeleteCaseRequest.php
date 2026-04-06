<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseId
 */
class DeleteCaseRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
