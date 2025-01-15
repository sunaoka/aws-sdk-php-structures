<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryUrl
 * @property SourceCodeVersion $SourceCodeVersion
 * @property CodeConfiguration|null $CodeConfiguration
 * @property string|null $SourceDirectory
 */
class CodeRepository extends Shape
{
    /**
     * @param array{
     *     RepositoryUrl: string,
     *     SourceCodeVersion: SourceCodeVersion,
     *     CodeConfiguration?: CodeConfiguration|null,
     *     SourceDirectory?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
