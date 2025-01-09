<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\ImportJobRequest $ImportJobRequest
 */
class CreateImportJobRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ImportJobRequest: Shapes\ImportJobRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
