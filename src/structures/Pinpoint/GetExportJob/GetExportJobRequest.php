<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JobId
 */
class GetExportJobRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
