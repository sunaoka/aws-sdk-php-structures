<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyMigrationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataProviderIdentifier
 * @property string|null $SecretsManagerSecretId
 * @property string|null $SecretsManagerAccessRoleArn
 */
class DataProviderDescriptorDefinition extends Shape
{
    /**
     * @param array{
     *     DataProviderIdentifier: string,
     *     SecretsManagerSecretId?: string|null,
     *     SecretsManagerAccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
