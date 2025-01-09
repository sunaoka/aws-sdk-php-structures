<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteTagOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteTagOptionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
