<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $securityGroups
 * @property list<string> $subnets
 * @property bool|null $requireServiceS3Endpoint
 */
class VpcConfig extends Shape
{
    /**
     * @param array{
     *     securityGroups: list<string>,
     *     subnets: list<string>,
     *     requireServiceS3Endpoint?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
