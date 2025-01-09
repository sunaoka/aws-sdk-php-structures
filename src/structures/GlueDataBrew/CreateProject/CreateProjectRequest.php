<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property string $Name
 * @property string $RecipeName
 * @property Shapes\Sample $Sample
 * @property string $RoleArn
 * @property array<string, string> $Tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     DatasetName: string,
     *     Name: string,
     *     RecipeName: string,
     *     Sample?: Shapes\Sample,
     *     RoleArn: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
