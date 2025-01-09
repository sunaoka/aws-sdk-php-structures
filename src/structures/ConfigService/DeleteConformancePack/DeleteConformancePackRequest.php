<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConformancePack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConformancePackName
 */
class DeleteConformancePackRequest extends Request
{
    /**
     * @param array{ConformancePackName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
