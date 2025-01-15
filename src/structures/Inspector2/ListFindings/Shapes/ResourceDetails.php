<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEc2InstanceDetails|null $awsEc2Instance
 * @property AwsEcrContainerImageDetails|null $awsEcrContainerImage
 * @property AwsLambdaFunctionDetails|null $awsLambdaFunction
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     awsEc2Instance?: AwsEc2InstanceDetails|null,
     *     awsEcrContainerImage?: AwsEcrContainerImageDetails|null,
     *     awsLambdaFunction?: AwsLambdaFunctionDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
