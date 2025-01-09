<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property SecurityConfigurationData $securityConfigurationData
 * @property array<string, string> $tags
 */
class SecurityConfiguration extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     securityConfigurationData?: SecurityConfigurationData,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
