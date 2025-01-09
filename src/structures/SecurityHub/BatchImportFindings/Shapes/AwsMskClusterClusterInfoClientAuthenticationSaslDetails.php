<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoClientAuthenticationSaslIamDetails $Iam
 * @property AwsMskClusterClusterInfoClientAuthenticationSaslScramDetails $Scram
 */
class AwsMskClusterClusterInfoClientAuthenticationSaslDetails extends Shape
{
    /**
     * @param array{
     *     Iam?: AwsMskClusterClusterInfoClientAuthenticationSaslIamDetails,
     *     Scram?: AwsMskClusterClusterInfoClientAuthenticationSaslScramDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
