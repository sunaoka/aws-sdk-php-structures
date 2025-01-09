<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $lastSuccessfulComponentDeploymentIds
 * @property string $lastSuccessfulEnvironmentDeploymentId
 * @property string $lastSuccessfulServicePipelineDeploymentId
 * @property string $spec
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class ServiceInstanceState extends Shape
{
    /**
     * @param array{
     *     lastSuccessfulComponentDeploymentIds?: list<string>,
     *     lastSuccessfulEnvironmentDeploymentId?: string,
     *     lastSuccessfulServicePipelineDeploymentId?: string,
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
