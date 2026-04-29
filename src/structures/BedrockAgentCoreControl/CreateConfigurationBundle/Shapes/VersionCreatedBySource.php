<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateConfigurationBundle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $arn
 */
class VersionCreatedBySource extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
