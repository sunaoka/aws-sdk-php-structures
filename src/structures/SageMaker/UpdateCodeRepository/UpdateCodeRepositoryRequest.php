<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCodeRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeRepositoryName
 * @property Shapes\GitConfigForUpdate $GitConfig
 */
class UpdateCodeRepositoryRequest extends Request
{
    /**
     * @param array{
     *     CodeRepositoryName: string,
     *     GitConfig?: Shapes\GitConfigForUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
