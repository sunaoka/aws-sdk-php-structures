<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImportId
 */
class GetImportRequest extends Request
{
    /**
     * @param array{ImportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
