<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
