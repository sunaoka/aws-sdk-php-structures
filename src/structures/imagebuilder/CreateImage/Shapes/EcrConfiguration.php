<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property list<string>|null $containerTags
 */
class EcrConfiguration extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     containerTags?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
