<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService;

class AppIntegrationsServiceClient extends \Aws\AppIntegrationsService\AppIntegrationsServiceClient
{
    use CreateApplication\CreateApplicationTrait;
    use CreateDataIntegration\CreateDataIntegrationTrait;
    use CreateDataIntegrationAssociation\CreateDataIntegrationAssociationTrait;
    use CreateEventIntegration\CreateEventIntegrationTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteDataIntegration\DeleteDataIntegrationTrait;
    use DeleteEventIntegration\DeleteEventIntegrationTrait;
    use GetApplication\GetApplicationTrait;
    use GetDataIntegration\GetDataIntegrationTrait;
    use GetEventIntegration\GetEventIntegrationTrait;
    use ListApplicationAssociations\ListApplicationAssociationsTrait;
    use ListApplications\ListApplicationsTrait;
    use ListDataIntegrationAssociations\ListDataIntegrationAssociationsTrait;
    use ListDataIntegrations\ListDataIntegrationsTrait;
    use ListEventIntegrationAssociations\ListEventIntegrationAssociationsTrait;
    use ListEventIntegrations\ListEventIntegrationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateDataIntegration\UpdateDataIntegrationTrait;
    use UpdateDataIntegrationAssociation\UpdateDataIntegrationAssociationTrait;
    use UpdateEventIntegration\UpdateEventIntegrationTrait;
}
