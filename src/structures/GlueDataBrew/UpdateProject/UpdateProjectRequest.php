<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Sample $Sample
 * @property string $RoleArn
 * @property string $Name
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     Sample?: Shapes\Sample,
     *     RoleArn: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
