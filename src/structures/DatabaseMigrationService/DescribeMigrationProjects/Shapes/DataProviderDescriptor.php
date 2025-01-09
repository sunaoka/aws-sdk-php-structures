<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMigrationProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretsManagerSecretId
 * @property string $SecretsManagerAccessRoleArn
 * @property string $DataProviderName
 * @property string $DataProviderArn
 */
class DataProviderDescriptor extends Shape
{
    /**
     * @param array{
     *     SecretsManagerSecretId?: string,
     *     SecretsManagerAccessRoleArn?: string,
     *     DataProviderName?: string,
     *     DataProviderArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
