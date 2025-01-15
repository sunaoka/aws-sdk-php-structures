<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateEnvironmentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string|null $displayName
 * @property string $name
 */
class UpdateEnvironmentTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     displayName?: string|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
