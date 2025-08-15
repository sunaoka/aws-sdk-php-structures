<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workgroupArn
 * @property RedshiftServerlessAuthConfiguration $authConfiguration
 */
class RedshiftServerlessConfiguration extends Shape
{
    /**
     * @param array{
     *     workgroupArn: string,
     *     authConfiguration: RedshiftServerlessAuthConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
