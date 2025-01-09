<?php

namespace Sunaoka\Aws\Structures\AppRunner\ResumeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryUrl
 * @property SourceCodeVersion $SourceCodeVersion
 * @property CodeConfiguration $CodeConfiguration
 * @property string $SourceDirectory
 */
class CodeRepository extends Shape
{
    /**
     * @param array{
     *     RepositoryUrl: string,
     *     SourceCodeVersion: SourceCodeVersion,
     *     CodeConfiguration?: CodeConfiguration,
     *     SourceDirectory?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
