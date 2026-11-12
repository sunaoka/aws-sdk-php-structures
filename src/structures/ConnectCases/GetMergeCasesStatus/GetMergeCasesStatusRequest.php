<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetMergeCasesStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseId
 */
class GetMergeCasesStatusRequest extends Request
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
