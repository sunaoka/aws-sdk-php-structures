<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyMigrationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretsManagerSecretId
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $DataProviderName
 * @property string|null $DataProviderArn
 */
class DataProviderDescriptor extends Shape
{
    /**
     * @param array{
     *     SecretsManagerSecretId?: string|null,
     *     SecretsManagerAccessRoleArn?: string|null,
     *     DataProviderName?: string|null,
     *     DataProviderArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
