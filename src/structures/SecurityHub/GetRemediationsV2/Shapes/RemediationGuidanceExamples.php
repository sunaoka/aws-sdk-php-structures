<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AwsCli
 * @property string|null $Cli
 * @property string|null $Python
 * @property string|null $Terraform
 * @property string|null $Cdk
 * @property string|null $CloudFormation
 * @property string|null $IaC
 * @property string|null $Template
 */
class RemediationGuidanceExamples extends Shape
{
    /**
     * @param array{
     *     AwsCli?: string|null,
     *     Cli?: string|null,
     *     Python?: string|null,
     *     Terraform?: string|null,
     *     Cdk?: string|null,
     *     CloudFormation?: string|null,
     *     IaC?: string|null,
     *     Template?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
