<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainExecutionRoleArn
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property string|null $RStudioConnectUrl
 * @property string|null $RStudioPackageManagerUrl
 */
class RStudioServerProDomainSettingsForUpdate extends Shape
{
    /**
     * @param array{
     *     DomainExecutionRoleArn: string,
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     RStudioConnectUrl?: string|null,
     *     RStudioPackageManagerUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
