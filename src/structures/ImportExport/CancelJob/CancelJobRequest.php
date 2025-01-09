<?php

namespace Sunaoka\Aws\Structures\ImportExport\CancelJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property string $APIVersion
 */
class CancelJobRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     APIVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
