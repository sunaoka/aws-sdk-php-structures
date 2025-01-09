<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteWorkforce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkforceName
 */
class DeleteWorkforceRequest extends Request
{
    /**
     * @param array{WorkforceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
