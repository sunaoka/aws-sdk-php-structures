<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property 'Server'|'Lambda'|'ECS'|null $computePlatform
 * @property list<Shapes\Tag>|null $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     computePlatform?: 'Server'|'Lambda'|'ECS'|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
