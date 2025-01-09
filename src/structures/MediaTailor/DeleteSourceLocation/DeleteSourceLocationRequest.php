<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeleteSourceLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceLocationName
 */
class DeleteSourceLocationRequest extends Request
{
    /**
     * @param array{SourceLocationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
