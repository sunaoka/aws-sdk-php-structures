<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\DeleteTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
