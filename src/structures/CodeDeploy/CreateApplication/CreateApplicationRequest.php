<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property 'Server'|'Lambda'|'ECS' $computePlatform
 * @property list<Shapes\Tag> $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     computePlatform?: 'Server'|'Lambda'|'ECS',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
