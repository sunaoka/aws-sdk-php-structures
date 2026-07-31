<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $codeConnectionArn
 * @property string $repositoryId
 * @property string $defaultBranch
 */
class GitPropertiesInput extends Shape
{
    /**
     * @param array{
     *     codeConnectionArn: string,
     *     repositoryId: string,
     *     defaultBranch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
