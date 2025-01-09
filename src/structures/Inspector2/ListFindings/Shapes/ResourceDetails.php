<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEc2InstanceDetails $awsEc2Instance
 * @property AwsEcrContainerImageDetails $awsEcrContainerImage
 * @property AwsLambdaFunctionDetails $awsLambdaFunction
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     awsEc2Instance?: AwsEc2InstanceDetails,
     *     awsEcrContainerImage?: AwsEcrContainerImageDetails,
     *     awsLambdaFunction?: AwsLambdaFunctionDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
