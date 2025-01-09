<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StopImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImportId
 */
class StopImportRequest extends Request
{
    /**
     * @param array{ImportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
