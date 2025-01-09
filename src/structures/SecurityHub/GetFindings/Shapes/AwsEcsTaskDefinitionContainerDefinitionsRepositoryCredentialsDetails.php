<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CredentialsParameter
 */
class AwsEcsTaskDefinitionContainerDefinitionsRepositoryCredentialsDetails extends Shape
{
    /**
     * @param array{CredentialsParameter?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
