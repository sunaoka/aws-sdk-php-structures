<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextName
 * @property string $Description
 * @property array<string, string> $Properties
 * @property list<string> $PropertiesToRemove
 */
class UpdateContextRequest extends Request
{
    /**
     * @param array{
     *     ContextName: string,
     *     Description?: string,
     *     Properties?: array<string, string>,
     *     PropertiesToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
