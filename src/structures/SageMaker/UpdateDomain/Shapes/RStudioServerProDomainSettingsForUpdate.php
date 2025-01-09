<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainExecutionRoleArn
 * @property ResourceSpec $DefaultResourceSpec
 * @property string $RStudioConnectUrl
 * @property string $RStudioPackageManagerUrl
 */
class RStudioServerProDomainSettingsForUpdate extends Shape
{
    /**
     * @param array{
     *     DomainExecutionRoleArn: string,
     *     DefaultResourceSpec?: ResourceSpec,
     *     RStudioConnectUrl?: string,
     *     RStudioPackageManagerUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
