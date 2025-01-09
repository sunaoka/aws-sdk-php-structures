<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $credentialsParameter
 */
class RepositoryCredentials extends Shape
{
    /**
     * @param array{credentialsParameter: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
