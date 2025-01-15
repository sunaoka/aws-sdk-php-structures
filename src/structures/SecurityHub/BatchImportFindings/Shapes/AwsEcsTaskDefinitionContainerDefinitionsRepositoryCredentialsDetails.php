<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CredentialsParameter
 */
class AwsEcsTaskDefinitionContainerDefinitionsRepositoryCredentialsDetails extends Shape
{
    /**
     * @param array{CredentialsParameter?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
