<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoClientAuthenticationSaslIamDetails|null $Iam
 * @property AwsMskClusterClusterInfoClientAuthenticationSaslScramDetails|null $Scram
 */
class AwsMskClusterClusterInfoClientAuthenticationSaslDetails extends Shape
{
    /**
     * @param array{
     *     Iam?: AwsMskClusterClusterInfoClientAuthenticationSaslIamDetails|null,
     *     Scram?: AwsMskClusterClusterInfoClientAuthenticationSaslScramDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
