<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property list<string> $containerTags
 */
class EcrConfiguration extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     containerTags?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
