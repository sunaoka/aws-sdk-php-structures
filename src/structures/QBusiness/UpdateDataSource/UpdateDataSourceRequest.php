<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $dataSourceId
 * @property string $displayName
 * @property Shapes\DataSourceConfiguration $configuration
 * @property Shapes\DataSourceVpcConfiguration $vpcConfiguration
 * @property string $description
 * @property string $syncSchedule
 * @property string $roleArn
 * @property Shapes\DocumentEnrichmentConfiguration $documentEnrichmentConfiguration
 * @property Shapes\MediaExtractionConfiguration $mediaExtractionConfiguration
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     dataSourceId: string,
     *     displayName?: string,
     *     configuration?: Shapes\DataSourceConfiguration,
     *     vpcConfiguration?: Shapes\DataSourceVpcConfiguration,
     *     description?: string,
     *     syncSchedule?: string,
     *     roleArn?: string,
     *     documentEnrichmentConfiguration?: Shapes\DocumentEnrichmentConfiguration,
     *     mediaExtractionConfiguration?: Shapes\MediaExtractionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
