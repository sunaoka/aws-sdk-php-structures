<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteInputSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string $inputSourceId
 */
class DeleteInputSourceRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     inputSourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
