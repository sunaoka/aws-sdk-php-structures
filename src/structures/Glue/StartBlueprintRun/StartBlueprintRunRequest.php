<?php

namespace Sunaoka\Aws\Structures\Glue\StartBlueprintRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueprintName
 * @property string|null $Parameters
 * @property string $RoleArn
 */
class StartBlueprintRunRequest extends Request
{
    /**
     * @param array{
     *     BlueprintName: string,
     *     Parameters?: string|null,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
