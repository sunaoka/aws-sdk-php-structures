<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $dataSourceId
 * @property string|null $displayName
 * @property Shapes\DataSourceConfiguration|null $configuration
 * @property Shapes\DataSourceVpcConfiguration|null $vpcConfiguration
 * @property string|null $description
 * @property string|null $syncSchedule
 * @property string|null $roleArn
 * @property Shapes\DocumentEnrichmentConfiguration|null $documentEnrichmentConfiguration
 * @property Shapes\MediaExtractionConfiguration|null $mediaExtractionConfiguration
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     dataSourceId: string,
     *     displayName?: string|null,
     *     configuration?: Shapes\DataSourceConfiguration|null,
     *     vpcConfiguration?: Shapes\DataSourceVpcConfiguration|null,
     *     description?: string|null,
     *     syncSchedule?: string|null,
     *     roleArn?: string|null,
     *     documentEnrichmentConfiguration?: Shapes\DocumentEnrichmentConfiguration|null,
     *     mediaExtractionConfiguration?: Shapes\MediaExtractionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
