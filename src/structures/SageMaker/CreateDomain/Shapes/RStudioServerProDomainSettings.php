<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainExecutionRoleArn
 * @property string|null $RStudioConnectUrl
 * @property string|null $RStudioPackageManagerUrl
 * @property ResourceSpec|null $DefaultResourceSpec
 */
class RStudioServerProDomainSettings extends Shape
{
    /**
     * @param array{
     *     DomainExecutionRoleArn: string,
     *     RStudioConnectUrl?: string|null,
     *     RStudioPackageManagerUrl?: string|null,
     *     DefaultResourceSpec?: ResourceSpec|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
