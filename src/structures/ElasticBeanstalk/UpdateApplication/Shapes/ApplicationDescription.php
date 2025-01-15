<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationArn
 * @property string|null $ApplicationName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateUpdated
 * @property list<string>|null $Versions
 * @property list<string>|null $ConfigurationTemplates
 * @property ApplicationResourceLifecycleConfig|null $ResourceLifecycleConfig
 */
class ApplicationDescription extends Shape
{
    /**
     * @param array{
     *     ApplicationArn?: string|null,
     *     ApplicationName?: string|null,
     *     Description?: string|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateUpdated?: \Aws\Api\DateTimeResult|null,
     *     Versions?: list<string>|null,
     *     ConfigurationTemplates?: list<string>|null,
     *     ResourceLifecycleConfig?: ApplicationResourceLifecycleConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
