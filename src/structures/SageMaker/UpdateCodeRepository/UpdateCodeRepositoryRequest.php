<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCodeRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeRepositoryName
 * @property Shapes\GitConfigForUpdate|null $GitConfig
 */
class UpdateCodeRepositoryRequest extends Request
{
    /**
     * @param array{
     *     CodeRepositoryName: string,
     *     GitConfig?: Shapes\GitConfigForUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
