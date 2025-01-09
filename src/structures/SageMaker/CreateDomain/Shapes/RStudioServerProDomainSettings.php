<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainExecutionRoleArn
 * @property string $RStudioConnectUrl
 * @property string $RStudioPackageManagerUrl
 * @property ResourceSpec $DefaultResourceSpec
 */
class RStudioServerProDomainSettings extends Shape
{
    /**
     * @param array{
     *     DomainExecutionRoleArn: string,
     *     RStudioConnectUrl?: string,
     *     RStudioPackageManagerUrl?: string,
     *     DefaultResourceSpec?: ResourceSpec
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
