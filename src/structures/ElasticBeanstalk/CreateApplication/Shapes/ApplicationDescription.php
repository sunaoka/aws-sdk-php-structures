<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationArn
 * @property string $ApplicationName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateUpdated
 * @property list<string> $Versions
 * @property list<string> $ConfigurationTemplates
 * @property ApplicationResourceLifecycleConfig $ResourceLifecycleConfig
 */
class ApplicationDescription extends Shape
{
    /**
     * @param array{
     *     ApplicationArn?: string,
     *     ApplicationName?: string,
     *     Description?: string,
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateUpdated?: \Aws\Api\DateTimeResult,
     *     Versions?: list<string>,
     *     ConfigurationTemplates?: list<string>,
     *     ResourceLifecycleConfig?: ApplicationResourceLifecycleConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
