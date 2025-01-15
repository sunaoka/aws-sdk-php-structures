<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string|null $Description
 * @property Shapes\ApplicationResourceLifecycleConfig|null $ResourceLifecycleConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     Description?: string|null,
     *     ResourceLifecycleConfig?: Shapes\ApplicationResourceLifecycleConfig|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
