<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $displayName
 * @property Shapes\DataSourceConfiguration $configuration
 * @property Shapes\DataSourceVpcConfiguration $vpcConfiguration
 * @property string $description
 * @property list<Shapes\Tag> $tags
 * @property string $syncSchedule
 * @property string $roleArn
 * @property string $clientToken
 * @property Shapes\DocumentEnrichmentConfiguration $documentEnrichmentConfiguration
 * @property Shapes\MediaExtractionConfiguration $mediaExtractionConfiguration
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     displayName: string,
     *     configuration: Shapes\DataSourceConfiguration,
     *     vpcConfiguration?: Shapes\DataSourceVpcConfiguration,
     *     description?: string,
     *     tags?: list<Shapes\Tag>,
     *     syncSchedule?: string,
     *     roleArn?: string,
     *     clientToken?: string,
     *     documentEnrichmentConfiguration?: Shapes\DocumentEnrichmentConfiguration,
     *     mediaExtractionConfiguration?: Shapes\MediaExtractionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
