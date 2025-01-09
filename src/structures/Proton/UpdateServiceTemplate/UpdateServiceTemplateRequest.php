<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $displayName
 * @property string $name
 */
class UpdateServiceTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     displayName?: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
