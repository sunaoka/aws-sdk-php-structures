<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationExecutionID
 * @property string $networkMigrationDefinitionID
 */
class StartNetworkMigrationAnalysisRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationExecutionID: string,
     *     networkMigrationDefinitionID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
