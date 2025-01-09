<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetImportFileTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetImportFileTaskRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
