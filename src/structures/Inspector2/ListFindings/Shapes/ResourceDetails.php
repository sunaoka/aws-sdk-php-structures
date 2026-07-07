<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEc2InstanceDetails|null $awsEc2Instance
 * @property AwsEcrContainerImageDetails|null $awsEcrContainerImage
 * @property AwsLambdaFunctionDetails|null $awsLambdaFunction
 * @property CodeRepositoryDetails|null $codeRepository
 * @property Vm|null $vm
 * @property Image|null $image
 * @property ServerlessFunction|null $serverlessFunction
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     awsEc2Instance?: AwsEc2InstanceDetails|null,
     *     awsEcrContainerImage?: AwsEcrContainerImageDetails|null,
     *     awsLambdaFunction?: AwsLambdaFunctionDetails|null,
     *     codeRepository?: CodeRepositoryDetails|null,
     *     vm?: Vm|null,
     *     image?: Image|null,
     *     serverlessFunction?: ServerlessFunction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
