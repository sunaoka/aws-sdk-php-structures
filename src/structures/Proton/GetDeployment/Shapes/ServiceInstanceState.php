<?php

namespace Sunaoka\Aws\Structures\Proton\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $lastSuccessfulComponentDeploymentIds
 * @property string|null $lastSuccessfulEnvironmentDeploymentId
 * @property string|null $lastSuccessfulServicePipelineDeploymentId
 * @property string $spec
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class ServiceInstanceState extends Shape
{
    /**
     * @param array{
     *     lastSuccessfulComponentDeploymentIds?: list<string>|null,
     *     lastSuccessfulEnvironmentDeploymentId?: string|null,
     *     lastSuccessfulServicePipelineDeploymentId?: string|null,
     *     spec: string,
     *     templateMajorVersion: string,
     *     templateMinorVersion: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
