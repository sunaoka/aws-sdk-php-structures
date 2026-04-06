<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string|null $ProjectDescription
 * @property Shapes\ServiceCatalogProvisioningUpdateDetails|null $ServiceCatalogProvisioningUpdateDetails
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\UpdateTemplateProvider>|null $TemplateProvidersToUpdate
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ProjectDescription?: string|null,
     *     ServiceCatalogProvisioningUpdateDetails?: Shapes\ServiceCatalogProvisioningUpdateDetails|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     TemplateProvidersToUpdate?: list<Shapes\UpdateTemplateProvider>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
