<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationExecutionID
 * @property string $networkMigrationDefinitionID
 */
class StartNetworkMigrationDeploymentRequest extends Request
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
