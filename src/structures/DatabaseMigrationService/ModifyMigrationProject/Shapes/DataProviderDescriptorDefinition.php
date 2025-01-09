<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyMigrationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataProviderIdentifier
 * @property string $SecretsManagerSecretId
 * @property string $SecretsManagerAccessRoleArn
 */
class DataProviderDescriptorDefinition extends Shape
{
    /**
     * @param array{
     *     DataProviderIdentifier: string,
     *     SecretsManagerSecretId?: string,
     *     SecretsManagerAccessRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
