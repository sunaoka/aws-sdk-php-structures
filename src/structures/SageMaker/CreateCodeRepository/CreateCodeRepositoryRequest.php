<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCodeRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeRepositoryName
 * @property Shapes\GitConfig $GitConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCodeRepositoryRequest extends Request
{
    /**
     * @param array{
     *     CodeRepositoryName: string,
     *     GitConfig: Shapes\GitConfig,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
