<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryUrl
 * @property SourceCodeVersion $SourceCodeVersion
 * @property CodeConfiguration|null $CodeConfiguration
 */
class CodeRepository extends Shape
{
    /**
     * @param array{
     *     RepositoryUrl: string,
     *     SourceCodeVersion: SourceCodeVersion,
     *     CodeConfiguration?: CodeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
