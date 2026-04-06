<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetAgentSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VpcConfig>|null $vpcs
 * @property list<string>|null $logGroups
 * @property list<string>|null $s3Buckets
 * @property list<string>|null $secretArns
 * @property list<string>|null $lambdaFunctionArns
 * @property list<string>|null $iamRoles
 */
class AWSResources extends Shape
{
    /**
     * @param array{
     *     vpcs?: list<VpcConfig>|null,
     *     logGroups?: list<string>|null,
     *     s3Buckets?: list<string>|null,
     *     secretArns?: list<string>|null,
     *     lambdaFunctionArns?: list<string>|null,
     *     iamRoles?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
