<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $Description
 * @property Shapes\ApplicationResourceLifecycleConfig $ResourceLifecycleConfig
 * @property list<Shapes\Tag> $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     Description?: string,
     *     ResourceLifecycleConfig?: Shapes\ApplicationResourceLifecycleConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
