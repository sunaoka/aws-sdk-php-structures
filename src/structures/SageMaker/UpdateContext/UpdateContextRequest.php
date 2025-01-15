<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextName
 * @property string|null $Description
 * @property array<string, string>|null $Properties
 * @property list<string>|null $PropertiesToRemove
 */
class UpdateContextRequest extends Request
{
    /**
     * @param array{
     *     ContextName: string,
     *     Description?: string|null,
     *     Properties?: array<string, string>|null,
     *     PropertiesToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
