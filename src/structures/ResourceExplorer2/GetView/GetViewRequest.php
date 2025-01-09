<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ViewArn
 */
class GetViewRequest extends Request
{
    /**
     * @param array{ViewArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
