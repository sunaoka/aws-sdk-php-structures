<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $roleArn
 * @property string|null $service
 * @property string|null $region
 */
class RegistryRecordIamCredentialProvider extends Shape
{
    /**
     * @param array{
     *     roleArn?: string|null,
     *     service?: string|null,
     *     region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
