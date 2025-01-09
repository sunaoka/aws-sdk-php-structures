<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteCodeRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeRepositoryName
 */
class DeleteCodeRepositoryRequest extends Request
{
    /**
     * @param array{CodeRepositoryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
