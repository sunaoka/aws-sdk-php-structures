<?php

namespace Sunaoka\Aws\Structures\Iot\CreateMitigationAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionName
 * @property string $roleArn
 * @property Shapes\MitigationActionParams $actionParams
 * @property list<Shapes\Tag> $tags
 */
class CreateMitigationActionRequest extends Request
{
    /**
     * @param array{
     *     actionName: string,
     *     roleArn: string,
     *     actionParams: Shapes\MitigationActionParams,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
